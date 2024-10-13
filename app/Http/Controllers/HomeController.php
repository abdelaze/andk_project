<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $data['whats_number']                        = @Setting::where('key', 'whats_number')->first('value')->value;
        $data['tiktok_url']                          = @Setting::where('key', 'tiktok_url')->first('value')->value;
        $data['instagram_url']                       = @Setting::where('key', 'instagram_url')->first('value')->value;
        $data['x_url']                               = @Setting::where('key', 'x_url')->first('value')->value;
        $data['facebook_url']                        = @Setting::where('key', 'facebook_url')->first('value')->value;
        $data['about_us_text']                       = @Setting::where('key', 'abouts_us_text')->first('value')->value;
        $data['about_us_image']                      = @Setting::where('key', 'abouts_us_image')->first('value')->value;

        $data['features_image_one']                  = @Setting::where('key', 'features_image_one')->first('value')->value;
        $data['features_image_two']                  = @Setting::where('key', 'features_image_two')->first('value')->value;

        $data['investment_image']                    = @Setting::where('key', 'investment_image')->first('value')->value;
        $data['sectors_image']                       = @Setting::where('key', 'sectors_image')->first('value')->value;
        $data['contact_us_image']                    = @Setting::where('key', 'contact_us_image')->first('value')->value;
        $data['logo']                                = @Setting::where('key', 'logo')->first('value')->value;

        $data['goal_text']                           = @Setting::where('key', 'goal_text')->first('value')->value;
        $data['value_text']                          = @Setting::where('key', 'value_text')->first('value')->value;
        $data['vision_text']                         = @Setting::where('key', 'vision_text')->first('value')->value;
        $data['competitive_advantages_text']         = @Setting::where('key', 'competitive_advantages_text')->first('value')->value;
        $data['current_investment_opportunity_text'] = @Setting::where('key', 'current_investment_opportunity_text')->first('value')->value;
        $data['benefits_for_investors_text']         = @Setting::where('key', 'benefits_for_investors_text')->first('value')->value;
        $data['sector_one_text']                     = @Setting::where('key', 'sector_one_text')->first('value')->value;
        $data['sector_two_text']                     = @Setting::where('key', 'sector_two_text')->first('value')->value;
        $data['sector_three_text']                   = @Setting::where('key', 'sector_three_text')->first('value')->value;

        $data['sector_one_title']                     = @Setting::where('key', 'sector_one_title')->first('value')->value;
        $data['sector_two_title']                     = @Setting::where('key', 'sector_two_title')->first('value')->value;
        $data['sector_three_title']                   = @Setting::where('key', 'sector_three_title')->first('value')->value;

        return view('home' , $data);
    }
}
