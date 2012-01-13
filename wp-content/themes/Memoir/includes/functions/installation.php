 <span class="boldtext">1. How do I install Memoir onto my wordpress blog? </span> 
<div class="indent"> 
  <p>There are several files included in the ZIP folder. These include wordpress theme files, plugin files, and photoshop files. To installed your wordpress theme you will first need to upload the theme/plugin files via FTP to your server. </p> 
  <p>First you are going to upload the theme folder. Inside the ZIP folder you downloaded you will see a folder named &quot;theme.&quot; Within it is a folder named &quot;Memoir.&quot; Via ftp, upload the &quot;Memoir&quot; folder to your Wordpress themes directory. Depending on where you installed Wordpress on your server, the wp themes folder will be located in a path similar to: /public_html/blog/wp-content/themes. </p> 
  <p>Next you need to select Memoir and make it your default theme. Click on the design link, and under the themes tab locate Memoir from the selection of themes and activate it. Your blog should now be updated with your new theme. </p> 
<p>Finally, once the theme has been activated, you should navigate to the Appearances > Memoir Theme Options page. Here you can adjust settings pertaining to theme's display. Once you have adjusted whatever settings you would like to change click the "save" button. You must click the "save" button for the options to be saved to the database. Even if you did not change anything you should click the save button once before using the theme to insure that the database has been written correctly.</p> 
</div> 
<span class="boldtext">2. How do I add the thumbnails to my posts? </span> 
<div class="indent"> 
  <p>Memoir utilizes a script called TimThumb to automatically resize images. Whenever you make a new post you will need to add a custom field. Scroll down below the text editor and click on the &quot;custom fields&quot; link. In the &quot;Name&quot; section, input &quot;Thumbnail&quot; (this is case sensitive). In the &quot;Value&quot; area, input the url to your thumbnail image. Your image will automatically be resized and cropped. The image must be hosted on your domain. (this is to protect against bandwidth left) </p> 
  <p><span class="style1">Important Note: You <u>must</u> CHMOD the &quot;cache&quot; folder located in the Memoir directory to 777 for this script to work. You can CHMOD (change the permissions) of a file using your favorite FTP program. If you are confused try following <a href="http://www.siteground.com/tutorials/ftp/ftp_chmod.htm"><u>this tutorial</u></a><u>.</u> Of course instead of CHMODing the template folder (as in the tutorial) you would CHMOD the &quot;cache&quot; folder found within your theme's directory. </span></p> 
</div> 
<span class="boldtext">3. How do I add my title/logo? </span> 
<div class="indent"> 
<p>In this theme the title/logo is an image, which means you will need an image editor to add your own text. You can do this by opening the blank logo image located at Photoshop Files/logo_blank.png, or by opening the logo PSD file located at Photoshop Files/logo.psd. Replace the edited logo with the old logo by placing it in the following directory: theme/Memoir/images, and naming the file "logo.png". If you need more room, or would like to edit the logo further, you can always do so by opening the original fully layered PSD file located at Photoshop Files/Memoir.psd</p>  </div> 
 
<span class="boldtext">4. How do I manage advertisements on my blog? </span> 
<div class="indent">You can change the images used in each of the advertisements, as well as which URL each ad points to, through the custom option pages found in wp-admin. Once logged in to the wordpress admin panel, click &quot;Design&quot; and then &quot;Memoir Theme Options&quot; to reveal the various theme options. You can also use the 125x125 advertisement widget by adding the ET: Advertisement widget to your sidebar, and filling in the required fields.  </div> 
 
<span class="boldtext">5. Changing the theme's background image </span> 
<div class="indent">Changing the background photo is easy. Simply navigate to the Appearances > Memoir Theme Options page in wp-admin and add the URL to your image in the Background Image field. </div> 
 
  <span class="boldtext">6. Adding descriptions to the nav menu</span> 
  <div class="indent"> 
  <p>This theme was made to be used with the new Nav Menu system introduced in WordPress 3.0. If you are running WordPress 3.0, then you can customize your navigation bar using the Appearances > Menus tab in wp-admin. The links added to the categories navigation bar will need descriptions before they will function correctly. These are the very short, 2-3 word blurbs that appear in gray below the larger white title of the category. To add these descriptions we need to first enabled link descriptions from within wp-admin. Once inside the Appearances > Menus page, click the "screen options" link on the top of your screen. Under "Show advanced menu properties," check the "Descriptions" option. Now when you add a link to your menu bar there will be a new field that you can fill out called "Description." This should be filled out for all of your category navigation links. </p></div> 
 
<h1 style="margin: 50px 0 20px 0;">Additional Instructions</h1> 
 
<span class="boldtext">Using Sample Data to populate your first installation </span> 
<div class="indent"> 
<p>If you are starting from scratch, and installing Nova onto a WordPress blog that does not have any content yet (posts, pages, categories, etc), then you can choose to import our sample data file, which will populate your new WorPress blog with "dummy content." This dummy content is just a bunch of gibberish text, however, it will give you a good template to work with. Instead of following the above instructions, some people prefer to simply upload the sample data first, and then replace the dummy content with their own. To do this, you can use the Tools > Import feature in wp-admin to import the included sample data file. This sample data file comes with all themes, and is located in your theme folder here: sampledata/sample.xml. When performing the import procedure, be sure to check the "Import epanel settings" box.</p> 
</div> 
 
<span class="boldtext">Using Shortcodes - Create advanced layouts with ease</span> 
<div class="indent"> 
  <p>All of our themes come with a comprehensive collection of shortcodes. These shortcodes allow you to use pre-made design elements to create advanced page/post layouts without any HTML knowledge. When you install the theme, you will notice that some new buttons have been added to the WordPress text editor. Clicking these buttons will reveal options for adding shortcodes to your post. For complete shortcode documentation you can refer to the video on the left, as well as the following documentation page: <a href="http://www.elegantthemes.com/preview/TheProfessional/357-2/">http://www.elegantthemes.com/preview/TheProfessional/357-2/</a></p> 
</div> 
 
<span class="boldtext">Using Page Templates To Create Advanced Layouts</span> 
<div class="indent"> 
  <p>All of our themes come with a collection of page templates that can be used for a variety of purposes. You can apply each of these page templates to any page that you have created. When you edit a page in wp-admin, you will notice a Templates dropdown menu to the right of the text editor. Here you can select from a list of available page templates. Once a template is selected, additional settings will appear in the "ET Page Templates Settings" box below the dropdown menu. These settings should be configured to acheive the desired result, as outlined in this video tutorial. </p> 
</div> 