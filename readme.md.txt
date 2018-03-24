-- Project designed by Ahmed Elmasry
-- version 1.0.0

--- plugins used 
	--ACF Plugin
	--pop up plugin

--- Project Desc
 --image slider each image contain project we working on by press button <learn more> will pop up project description

---helping scripts
    -- wp_deregister_script('jquery'); // remove current jquery to handle to footer
    --wp_register_script( 'jquery', includes_url().'/js/jquery/jquery.js', array(),'', true );
    --wp_enqueue_script('jquery');
    --wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap.min.js',array(),false,true); //insert bootstarp
    --wp_enqueue_script('nicescroll-js',get_template_directory_uri().'/js/jquery.nicescroll.min.js',array(),false,true);
    --wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(),false,true);

    //to heal ie less than 9
    --wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js', array(),false,true);
    --wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' ); 
    --wp_enqueue_script('respond', get_template_directory_uri() . '/js/respond.min.js', array(),false,true);
    --wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );


---helping style scripts
    --wp_enqueue_style('bootstrap-style',get_template_directory_uri().'/css/bootstrap.min.css');
    --wp_enqueue_style('awesome',get_template_directory_uri().'/css/font-awesome.min.css');
    --wp_enqueue_style('main',get_template_directory_uri().'/css/main.css');

