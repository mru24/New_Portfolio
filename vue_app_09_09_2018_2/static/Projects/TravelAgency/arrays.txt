<?php

$navbar = array(
  array(
    'name'  =>  'Home',
    'link'  =>  'index.php#main'
  ),
  array(
    'name'  =>  'Destinations',
    'link'  =>  'dest.php'
  ),
  array(
    'name'  =>  'Last Minute',
    'link'  =>  'lm.php'
  ),
  array(
    'name'  =>  'Contact Us',
    'link'  =>  '#contact'
  )
);

// OFFERS MENU

$offers = array(
  array(
    'title'     =>  'SUMMER 2018 SALE',
    'image'     =>  'img04.jpg',
    'color'     =>  'indigo',
    'content'   =>  'Summer 2018 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates aperiam saepe unde labore praesentium eius suscipit iure rerum quod voluptas.',
    'link'      =>  '#'
  ),
  array(
    'title'     =>  'City Breaks',
    'image'     =>  'img05.jpg',
    'color'     =>  'green',
    'content'   =>  'City breaks Lorem ipsum dolor sit amet, consectetur adipisicing  elit. Facere assumenda ducimus sint perspiciatis possimus fuga, suscipit est enim pariatur ut.',
    'link'      =>  '#'
  ),
  array(
    'title'     =>  'Cruise',
    'image'     =>  'img06.jpg',
    'color'     =>  'orange',
    'content'   =>  'Cruise Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsam nam eaque quis enim, similique sit, perspiciatis iure harum repellendus.',
    'link'      =>  '#'
  ),
);

// IMAGE SLIDER

$slides = array(
  array(
    'image'         =>  'image01.jpg',
    'title'         =>  'Summer 2018',
    'captionAlign'  =>  'left'
  ),
  array(
    'image'         =>  'image02.jpg',
    'title'         =>  'Visit Exotic Places',
    'captionAlign'  =>  'center'
  ),
  array(
    'image'         =>  'image03.jpg',
    'title'         =>  'Last Minute',
    'captionAlign'  =>  'right'
  ),
  array(
    'image'         =>  'image04.jpg',
    'title'         =>  'Amazing Italy',
    'captionAlign'  =>  'left'
  ),
  array(
    'image'         =>  'image05.jpg',
    'title'         =>  'Beautiful Ocean',
    'captionAlign'  =>  'center'
  ),
  array(
    'image'         =>  'image06.jpg',
    'title'         =>  'All Inclusive',
    'captionAlign'  =>  'left'
  ),
  array(
    'image'         =>  'image07.jpg',
    'title'         =>  'Visit Venice',
    'captionAlign'  =>  'right'
  )
);

// LAST MINUTE MENU

$lastMinute = array(
  array(
    'title'     =>  'Iceland',
    'image'     =>  'img01.jpg',
    'color'     =>  'orange',
    'content'   =>  'Iceland Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo veritatis dolor, laborum sed maxime aliquam adipisci ratione aperiam, odit dignissimos.',
    'link'      =>  '#'
  ),
  array(
    'title'     =>  'Benidorm',
    'image'     =>  'img02.jpg',
    'color'     =>  'orange',
    'content'   =>  'Benidorm Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsam nam eaque quis enim, similique sit, perspiciatis iure harum repellendus.',
    'link'      =>  '#'
  ),
  array(
    'title'     =>  'Tahiti',
    'image'     =>  'img03.jpg',
    'color'     =>  'orange',
    'content'   =>  'Tahiti Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo veritatis dolor, laborum sed maxime aliquam adipisci ratione aperiam, odit dignissimos.',
    'link'      =>  '#'
  )
);

// DESTINATIONS

$destinations = array(
  'Europe' => array(
    'image' =>  'europe.jpg',
    'country'  =>  array(
      'United Kingdom'  => array(
        'image'     =>  '',
        'places'    =>  array(
          'London'      =>    array(
            'name'      =>  'London',
            'image'     =>  'image1'
          ),
          'Manchester'  =>    array(
            'name'      =>  'Manchester',
            'image'     =>  'image2'
          ),
          'Scotland'    =>    array(
            'name'      =>  'Scotland',
            'image'     =>  'image3'
          )
        )
      ),
      'Italy'           => array(

      ),
      'France'          => array(

      ),
      'Spain'           => array(

      ),
    )
  ),
  'Asia' => array(
    'image' =>  'asia.jpg',
    'country'  =>  array(
      'Japan'  => array(

      ),
      'Hongkong'           => array(

      ),
      'Thailand'          => array(

      ),
      'Singapore'           => array(

      ),
    )
  ),
  'America' => array(
    'image' =>  'america.jpg',
    'country'  =>  array(
      'United States'  => array(

      ),
      'Canada'           => array(

      ),
      'Jamaica'          => array(

      ),
      'Cuba'           => array(

      ),
    )
  ),
  'Australia & Oceania' => array(
    'image' =>  'australia.jpg',
    'country'  =>  array(
      'Australia'  => array(

      ),
      'New Zealand'           => array(

      ),
      'Borneo'          => array(

      ),
    )
  )
);


// INFO BOXES

$infoBox = array(
  array(
    'title'   =>  'Why book with us?',
    'content' => array(
      'Over 20 years experience',
      'Award winning, independent travel agent',
      'Bespoke holiday, itineraries to suit yout exact requirements',
      'ABTA Bonded'
    ),
  ),
  array(
    'title'   =>  'Expert Knowledge',
    'content' => array(
      'Specialist travel consultants who have travelled extensively to our destinations',
      'Over half of our team have worked at Woopa! Travels at least 10 years',
      'Passionate about tailor-making holidays',
      'Dynamic pricing policy meaning we always quote on the best price available'
    ),
  ),
  array(
    'title'   =>  'Holiday Extras',
    'content' => array(
      'Airport parking and hotels',
      'Car hire',
      'Travel Insurance',
      'Holiday Money*',
    ),
    'info' => array(
      '*Enjoy 0% commission on over 40 foreign currencies. Simply call or visit your local branch.'
    ),
  )
);
