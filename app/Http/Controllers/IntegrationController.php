<?php

namespace App\Http\Controllers;

use App\Models\Integration;
use App\Models\User;
use App\Services\TwilioService;
use Illuminate\Http\Request;

use App\Http\Requests;

class IntegrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $integrations = $request->user()->integrations;
        return view('integrations.index')->with('integrations', $integrations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $type = $request->request->get('type');

        return view('integrations.create')->with(compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required|in:email,slack,hipchat,sms'
        ]);

        $settings = $this->validateSettings($request->request->get('type'), $request);

        /** @var User $user */
        $user = $request->user();
        $user->integrations()->create([
            'name' => $request->request->get('name'),
            'type' => $request->request->get('type'),
            'settings' => $settings,
        ]);

        return redirect(route('account.integrations.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Integration $integration
     * @return \Illuminate\Http\Response
     */
    public function edit(Integration $integration)
    {
        $type = $integration->type;
        return view('integrations.edit')->with(compact('type', 'integration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Integration $integration
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Integration $integration)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $settings = $this->validateSettings($integration->type, $request);

        $integration->update([
            'name' => $request->request->get('name'),
            'settings' => $settings,

        ]);

        return redirect(route('account.integrations.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Integration $integration
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Integration $integration)
    {
        $integration->delete();

        return redirect(route('account.integrations.index'));
    }

    /**
     * @param string $type
     * @param Request $request
     * @return array
     * @throws \Exception
     */
    private function validateSettings($type, Request $request)
    {
        switch ($type) {

            case 'email':
                $this->validate($request, [
                    'settings.email' => 'required',
                ]);
                return $request->request->get('settings');

            case 'slack':
            case 'hipchat':
                $this->validate($request, [
                    'settings.webhook_url' => 'required',
                ]);
                return $request->request->get('settings');

            case 'sms':
                $this->validate($request, [
                    'settings.recipient' => 'required',
                    'settings.country' => 'required',
                ]);

                $settings = $request->request->get('settings');
                $twilioService = new TwilioService();
                $settings['recipient'] = $twilioService->numberLookUp($settings['recipient'], $settings['country']);

                return $settings;
        }

        throw new \Exception('Invalid type');
    }
}
