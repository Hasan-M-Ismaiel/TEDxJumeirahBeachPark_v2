<?php

namespace App\Http\Controllers;

use App\Http\Requests\MainEventRequest;
use App\Http\Requests\OtherCreateRequest;
use App\Http\Requests\PartnerCreateRequest;
use App\Http\Requests\RegisterCreateRequest;
use App\Http\Requests\SalonFirstRequest;
use App\Http\Requests\SalonSecondRequest;
use App\Models\SalonFirst;
use App\Http\Requests\VolunteerCreateRequest;
use App\Mail\SpeakerConfirmationMail;
use App\Mail\VolunteerConfirmationMail;
use App\Models\Email;
use App\Models\MainEvent;
use App\Models\Other;
use App\Models\Partner;
use App\Models\Register;
use App\Models\SalonSecond;
use App\Models\TemporaryFile;
use App\Models\User;
use App\Models\Volunteer;
use App\Notifications\NewOther;
use App\Notifications\NewPartner;
use App\Notifications\NewRegister;
use App\Notifications\NewVolunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;


class StoreFormInformationController extends Controller
{

    public function storeRegister(RegisterCreateRequest $request)
    {
        $temporaryFile = TemporaryFile::where('folder', $request->avatar)->first();
        if ($temporaryFile) {
            $register = Register::create($request->validated());

            if ($request->question_10) {
                $register->question_10 = $request->question_10;
                $register->save();
            }
            Alert::success('Success', 'Your request has been taken, Thank you!');

            $users = User::all();
            $user = $users->first();
            $user->notify(new NewRegister($register));

            Mail::to($register->email)->send(new SpeakerConfirmationMail([
                'title' => 'Dear ' . $register->full_name,
            ]));

            return redirect()->back();
        } else {
            Alert::warning('Error', 'please upload your video!');
            return redirect()->back();
        }
    }


    public function storeVolunteer(VolunteerCreateRequest $request)
    {
        $my_string = implode(",", $request->selected_skills);
        if ($request->question_5) {
            $my_string .= ", " . $request->question_5;
        }
        $volunteer = Volunteer::create([
            'full_name'         => $request->full_name,
            'email'             => $request->email,
            'phone_number'      => $request->phone_number,

            'nationality'       => $request->nationality,
            'residence_country' => $request->residence_country,

            'birthday'          => $request->birthday,
            'education'          => $request->education,
            'work'              => $request->work,
            'linkedin_account'  => $request->linkedin_account,
            'other_account'     => $request->other_account,

            'question_1'        => $request->question_1,
            'question_2'        => $request->question_2,
            'question_3'        => $request->question_3,
            'selected_skills'   => $my_string,
            'question_6'        => $request->question_6,
            'question_7'        => $request->question_7,
            'question_8'        => $request->question_8,
        ]);

        if ($request->hasFile('video')) {

            $this->validate($request, [
                'video' => 'file|mimetypes:video/mp4',
            ]);

            $path = $request->file('video')->store('volunteers_videos', ['disk' => 'my_files']);
            $volunteer->video_path = $path;
        }
        $volunteer->save();

        Alert::success('Success', 'Your request has been taken, Thank you!');

        $users = User::all();
        $user = $users->first();
        $user->notify(new NewVolunteer($volunteer));

        Mail::to($volunteer->email)->send(new VolunteerConfirmationMail([
            'title' => 'Dear ' . $volunteer->full_name,
        ]));

        return redirect()->back();
    }

    public function storePartner(PartnerCreateRequest $request)
    {

        $my_string = implode(",", $request->services);
        if ($request->question_6) {
            $my_string .= ", " . $request->question_6;
        }
        $partner = Partner::create([
            'full_name'         => $request->full_name,
            'email'             => $request->email,
            'phone_number'      => $request->phone_number,

            'nationality'       => $request->nationality,
            'residence_country' => $request->residence_country,

            'birthday'          => $request->birthday,
            'education'          => $request->education,
            'work'              => $request->work,
            'linkedin_account'  => $request->linkedin_account,
            'other_account'     => $request->other_account,

            'question_1'        => $request->question_1,

            'question_2'        => $request->question_2,
            'question_3'        => $request->question_3,
            'question_4'        => $request->question_4,
            'services'          => $my_string,
            'question_6'        => $request->question_6,
            'question_7'        => $request->question_7,
            'question_8'        => $request->question_8,
            'question_9'        => $request->question_9,
        ]);

        Alert::success('Success', 'Your request has been taken, Thank you!');

        $users = User::all();
        $user = $users->first();
        $user->notify(new NewPartner($partner));

        Mail::to($partner->email)->send(new SpeakerConfirmationMail([
            'title' => 'Dear ' . $partner->full_name,
        ]));

        return redirect()->back();
    }

    public function storeOther(OtherCreateRequest $request)
    {
        $other = Other::create($request->validated());
        if ($request->question_4) {
            $other->question_4 = $request->question_4;
            $other->save();
        }

        Alert::success('Success', 'Your request has been taken, Thank you!');

        $users = User::all();
        $user = $users->first();
        $user->notify(new NewOther($other));

        return redirect()->back();
    }


    public function storeEmail(Request $request)
    {
        if (! Email::where('email', $request->input('email'))->exists()) {
            $email = Email::create();
            $email->email = $request->input('email');
            $email->save();
        }


        Alert::success('Success', 'Your Email has been registered successfully, Thank you!');

        $users = User::all();
        $user = $users->first();

        return redirect()->back();
    }

    public function storeRegister_salon_1(SalonFirstRequest $request)
    {
        $SalonFirst = SalonFirst::create($request->validated());

        Alert::success('Success', 'Your information has been taken, Thank you!');

        return redirect()->back();
    }

    public function storeRegister_salon_2(SalonSecondRequest $request)
    {
        $SalonSecond = SalonSecond::create($request->validated());

        
        Alert::success('Success', 'Your information has been taken, Thank you!');

        return redirect()->back();
    }

    public function storeRegister_main_event(MainEventRequest $request)
    {
        $my_string = implode(",", $request->selected_options);
        if ($request->question_5_options) {
            $my_string .= ", " . $request->question_5_options;
        }
        Log::info($request->secondary_dropdown);
        $MainEvent = MainEvent::create([
            'full_name'        => $request->full_name,
            'email'            => $request->email,
            'phone_number'     => $request->phone_number,

            'country'          => $request->country,
            'city'             => $request->city,
            'birthday'         => $request->selected_year,
            'education'        => $request->education,
            'work'             => $request->work,
            'selected_options' => $my_string,
            'industry'         => $request->industry,
            'mainSelect'       => $request->main_select,
            'secondaryDropdown' => $request->secondary_dropdown,
            'why'              => $request->why,
        ]);

        Alert::success('Success', 'Your information has been taken, Thank you!');

        return redirect()->back();
    }
}
