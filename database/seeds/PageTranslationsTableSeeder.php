<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PageTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_translations')->delete();
        
        \DB::table('page_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'locale' => 'en',
                'title' => 'Home',
                'slug' => '',
                'content' => NULL,
                'seo_title' => 'Home',
                'seo_meta_description' => NULL,
                'seo_meta_keywords' => NULL,
                'visible' => 1,
                'published_at' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 2,
                'locale' => 'en',
                'title' => 'Help',
                'slug' => 'help',
                'content' => '<h4>What is this marketplace about?</h4>
<p>Tell the user what the website is about</p>
<h4>What can I sell?</h4>
<p>Tell sellers what how they can use the website</p>
<h4>What can I buy?</h4>
<p>Tell buyers how they can use the website</p>',
                'seo_title' => 'For sale',
                'seo_meta_description' => 'For sale meta',
                'seo_meta_keywords' => 'houses for sale, yes',
                'visible' => 1,
                'published_at' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 3,
                'locale' => 'en',
                'title' => 'About us',
                'slug' => 'about',
                'content' => '<p>PitchIn is a free marketplace where you can volunteer, donate or request donations. The current primary purposes is to assist during the COVID-19 pandemic but our hope is that this platform may be of use in the future.</p>
<p>On PItchIn volunteers can offer to assist in areas they are interested in existing projects, or work and organise their own project.</p>
<p>Makers can offer to provide 3D printed materials such as visors, valves and more.</p>
<p>And organisations can post requests for volunteers or contact makers.</p>
<p>This project was developed during the 2020 <a href="https://www.hackthecrisis.se/" target="_blank" rel="noopener">Hack the crisis</a>&nbsp;hackathon by <a href="https://oscarhinton.com" target="_blank" rel="noopener">Oscar Hinton</a> and <a href="https://andreascoroiu.com">Andreas Coroiu</a>.</p>',
                'seo_title' => NULL,
                'seo_meta_description' => NULL,
                'seo_meta_keywords' => NULL,
                'visible' => 1,
                'published_at' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 4,
                'locale' => 'en',
                'title' => 'Terms and conditions',
                'slug' => 'terms-and-conditions',
                'content' => '<p>Enter your terms and conditions here.</p>',
                'seo_title' => 'Terms and conditions',
                'seo_meta_description' => NULL,
                'seo_meta_keywords' => NULL,
                'visible' => 1,
                'published_at' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 5,
                'locale' => 'en',
                'title' => 'Privacy policy',
                'slug' => 'privacy-policy',
                'content' => '<p>Enter your privacy policy here</p>',
                'seo_title' => 'Privacy policy',
                'seo_meta_description' => NULL,
                'seo_meta_keywords' => NULL,
                'visible' => 1,
                'published_at' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}