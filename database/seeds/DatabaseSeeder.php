<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\horses as horses;

class DatabaseSeeder extends Seeder {

	
	public function run()
	{
		Model::unguard();

     $this->call('horsesTableSeeder');
	}

}







class horsesTableSeeder extends Seeder {

	
	public function run()
	{
            
    horses::truncate();
    
    horses::create(array (
      'coat_color' => 'black',
      'picture' => 'https://www.expatads.com/adpics1/2015/4/Gentle-Awesome-Friesian-Horse-Available-now-55352411339545eb5768.jpg'
        ));
    
    horses::create(array (
      'coat_color' => 'white',
      'picture' => 'http://www.whitehorseproductions.com/images/TBcolor/unbridleds_song4.jpg'
        ));
    
    horses::create(array (
      'coat_color' => 'piebald',
      'picture' => 'http://www.whinnyfarms.com/Images/mares/tabie/TabbyProfile2008_Esize.jpg'
        ));
    
    horses::create(array (
      'coat_color' => 'chestnut',
      'picture' => 'http://www.theequinest.com/images/chestnut-horse.jpg'
        ));
    
   horses::create(array (
      'coat_color' => 'dun',
      'picture' => 'http://www.horsebreakers.com/horses_for_sale/MJG%20Hollywoodroostin/Buckskin%20horse-MJG-Hollywoodroostin-left.jpg'
        ));
   
   horses::create(array (
      'coat_color' => 'palomino',
      'picture' => 'http://debatos.com/img/frontend/subjects/1/17/17d/17d4f98abed2b48ac9e39d61ec5ef3420936b585-800x800.jpg'
        ));
   
   
    horses::create(array (
      'coat_color' => 'bay',
      'picture' => '	http://cache.desktopnexus.com/thumbseg/641/641239-bigthumbnail.jpg'
        ));
   
   
  }


	}
