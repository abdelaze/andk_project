<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {

        $data['whats_number']  = @Setting::where('key', 'whats_number')->first('value')->value;
        $data['tiktok_url']    = @Setting::where('key', 'tiktok_url')->first('value')->value;
        $data['instagram_url'] = @Setting::where('key', 'instagram_url')->first('value')->value;
        $data['x_url']         = @Setting::where('key', 'x_url')->first('value')->value;
        $data['facebook_url']  = @Setting::where('key', 'facebook_url')->first('value')->value;


        return view('admin.settings.general_settings', $data);

    }

    public function updatesocilaLinks(Request $request) {

        Setting::updateOrInsert(['key' => 'whats_number'], [
            'value' => $request['whats_number'] ?? null
        ]);
        Setting::updateOrInsert(['key' => 'tiktok_url'], [
            'value' => $request['tiktok_url'] ?? null
        ]);
        Setting::updateOrInsert(['key' => 'instagram_url'], [
            'value' => $request['instagram_url'] ?? null
        ]);
        Setting::updateOrInsert(['key' => 'x_url'], [
            'value' => $request['x_url'] ?? null
        ]);
        Setting::updateOrInsert(['key' => 'facebook_url'], [
            'value' => $request['facebook_url'] ??null
        ]);
        flasher('Settings updated successfully','success');
        return back();
    }

    public function about_us()
    {

        $data['abouts_us_text']  = @Setting::where('key', 'abouts_us_text')->first('value')->value;
        $data['abouts_us_image']    = @Setting::where('key', 'abouts_us_image')->first('value')->value;
        return view('admin.settings.about_us', $data);
    }



    public function updateaboutUs(Request  $request) {


        Setting::updateOrInsert(['key' => 'abouts_us_text'], [
            'value' => $request['abouts_us_text'] ?? null
        ]);

        $image = null;
        if($request->abouts_us_image && !empty($request->abouts_us_image)){
            $path = public_path('uploads/settings/about_us');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file           = $request->file('abouts_us_image');
            $fileName       = uniqid() . '_' . trim($file->getClientOriginalName());
            $data           = str_replace(' ', '',$fileName);
            $file->move($path, str_replace(' ', '',$fileName));
            $image          = $data;

            Setting::updateOrInsert(['key' => 'abouts_us_image'], [
                'value' => $image ?? null
            ]);
        }



        flasher('Settings updated successfully','success');
        return back();
    }



    public function images()
    {

        $data['features_image_one']  = @Setting::where('key', 'features_image_one')->first('value')->value;
        $data['features_image_two']  = @Setting::where('key', 'features_image_two')->first('value')->value;

        $data['investment_image']    = @Setting::where('key', 'investment_image')->first('value')->value;
        $data['sectors_image']       = @Setting::where('key', 'sectors_image')->first('value')->value;
        $data['contact_us_image']    = @Setting::where('key', 'contact_us_image')->first('value')->value;
        $data['logo']                = @Setting::where('key', 'logo')->first('value')->value;

        return view('admin.settings.images', data: $data);
    }



    public function updateImages(Request  $request) {



        $features_image_one = null;
        if($request->features_image_one && !empty($request->features_image_one)){
            $path = public_path('uploads/settings/images');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file           = $request->file('features_image_one');
            $fileName       = uniqid() . '_' . trim($file->getClientOriginalName());
            $data           = str_replace(' ', '',$fileName);
            $file->move($path, str_replace(' ', '',$fileName));
            $features_image_one          = $data;

            Setting::updateOrInsert(['key' => 'features_image_one'], [
                'value' => $features_image_one ?? null
            ]);
        }

        $features_image_two = null;
        if($request->features_image_two && !empty($request->features_image_two)){
            $path = public_path('uploads/settings/images');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file           = $request->file('features_image_two');
            $fileName       = uniqid() . '_' . trim($file->getClientOriginalName());
            $data           = str_replace(' ', '',$fileName);
            $file->move($path, str_replace(' ', '',$fileName));
            $features_image_two          = $data;

            Setting::updateOrInsert(['key' => 'features_image_two'], [
                'value' => $features_image_two ?? null
            ]);
        }


        $investment_image = null;
        if($request->investment_image && !empty($request->investment_image)){
            $path = public_path('uploads/settings/images');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file           = $request->file('investment_image');
            $fileName       = uniqid() . '_' . trim($file->getClientOriginalName());
            $data           = str_replace(' ', '',$fileName);
            $file->move($path, str_replace(' ', '',$fileName));
            $investment_image          = $data;

            Setting::updateOrInsert(['key' => 'investment_image'], [
                'value' => $investment_image ?? null
            ]);
        }


        $sectors_image = null;
        if($request->sectors_image && !empty($request->sectors_image)){
            $path = public_path('uploads/settings/images');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file           = $request->file('sectors_image');
            $fileName       = uniqid() . '_' . trim($file->getClientOriginalName());
            $data           = str_replace(' ', '',$fileName);
            $file->move($path, str_replace(' ', '',$fileName));
            $sectors_image          = $data;

            Setting::updateOrInsert(['key' => 'sectors_image'], [
                'value' => $sectors_image ?? null
            ]);
        }


        $contact_us_image = null;
        if($request->contact_us_image && !empty($request->contact_us_image)){
            $path = public_path('uploads/settings/images');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file           = $request->file('contact_us_image');
            $fileName       = uniqid() . '_' . trim($file->getClientOriginalName());
            $data           = str_replace(' ', '',$fileName);
            $file->move($path, str_replace(' ', '',$fileName));
            $contact_us_image          = $data;

            Setting::updateOrInsert(['key' => 'contact_us_image'], [
                'value' => $contact_us_image ?? null
            ]);
        }

        $logo = null;
        if($request->logo && !empty($request->logo)){
            $path = public_path('uploads/settings/images');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file           = $request->file('logo');
            $fileName       = uniqid() . '_' . trim($file->getClientOriginalName());
            $data           = str_replace(' ', '',$fileName);
            $file->move($path, str_replace(' ', '',$fileName));
            $logo          = $data;

            Setting::updateOrInsert(['key' => 'logo'], [
                'value' => $logo ?? null
            ]);
        }


        flasher('Settings updated successfully','success');
        return back();
    }


    public function Texts()
    {

        $data['goal_text']  = @Setting::where('key', 'goal_text')->first('value')->value;
        $data['value_text'] = @Setting::where('key', 'value_text')->first('value')->value;
        $data['vision_text'] = @Setting::where('key', 'vision_text')->first('value')->value;
        $data['competitive_advantages_text'] = @Setting::where('key', 'competitive_advantages_text')->first('value')->value;
        $data['current_investment_opportunity_text'] = @Setting::where('key', 'current_investment_opportunity_text')->first('value')->value;
        $data['benefits_for_investors_text'] = @Setting::where('key', 'benefits_for_investors_text')->first('value')->value;
        $data['sector_one_text']  = @Setting::where('key', 'sector_one_text')->first('value')->value;
        $data['sector_two_text'] = @Setting::where('key', 'sector_two_text')->first('value')->value;
        $data['sector_three_text'] = @Setting::where('key', 'sector_three_text')->first('value')->value;

        $data['sector_one_title']  = @Setting::where('key', 'sector_one_title')->first('value')->value;
        $data['sector_two_title'] = @Setting::where('key', 'sector_two_title')->first('value')->value;
        $data['sector_three_title'] = @Setting::where('key', 'sector_three_title')->first('value')->value;

        return view('admin.settings.texts', data: $data);
    }



    public function updateTexts(Request  $request) {

        Setting::updateOrInsert(['key' => 'goal_text'], [
            'value' => $request['goal_text'] ?? null
        ]);

        Setting::updateOrInsert(['key' => 'value_text'], [
            'value' => $request['value_text'] ?? null
        ]);

        Setting::updateOrInsert(['key' => 'vision_text'], [
            'value' => $request['vision_text'] ?? null
        ]);

        Setting::updateOrInsert(['key' => 'competitive_advantages_text'], [
            'value' => $request['competitive_advantages_text'] ?? null
        ]);

        Setting::updateOrInsert(['key' => 'benefits_for_investors_text'], [
            'value' => $request['benefits_for_investors_text'] ?? null
        ]);

        Setting::updateOrInsert(['key' => 'current_investment_opportunity_text'], [
            'value' => $request['current_investment_opportunity_text'] ?? null
        ]);

        Setting::updateOrInsert(['key' => 'sector_one_text'], [
            'value' => $request['sector_one_text'] ?? null
        ]);

        Setting::updateOrInsert(['key' => 'sector_two_text'], [
            'value' => $request['sector_two_text'] ?? null
        ]);

        Setting::updateOrInsert(['key' => 'sector_three_text'], [
            'value' => $request['sector_three_text'] ?? null
        ]);

        Setting::updateOrInsert(['key' => 'sector_one_title'], [
            'value' => $request['sector_one_title'] ?? null
        ]);

        Setting::updateOrInsert(['key' => 'sector_two_title'], [
            'value' => $request['sector_two_title'] ?? null
        ]);

        Setting::updateOrInsert(['key' => 'sector_three_title'], [
            'value' => $request['sector_three_title'] ?? null
        ]);


        flasher('Settings updated successfully','success');
        return back();
    }







}
