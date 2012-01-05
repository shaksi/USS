 <span class="boldtext">1. How do I installed ColdStone onto my wordpress blog? </span> 
<div class="indent"> 
  <p>There are several files included in the ZIP folder. These include wordpress theme files, plugin files, and photoshop files. To installed your wordpress theme you will first need to upload the theme/plugin files via FTP to your server. </p> 
  <p>First you are going to upload the theme folder. Inside the ZIP folder you downloaded you will see a folder named &quot;theme.&quot; Within it is a folder named &quot;ColdStone.&quot; Via ftp, upload the &quot;ColdStone&quot; folder to your Wordpress themes directory. Depending on where you installed Wordpress on your server, the wp themes folder will be located in a path similar to: /public_html/blog/wp-content/themes. </p> 
  <p>Next you need to select ColdStone and make it your default theme. Click on the design link, and under the themes tab locate ColdStone from the selection of themes and activate it. Your blog should now be updated with your new theme. </p> 
</div> 
<span class="boldtext">2. How do I add the thumbnails to my posts? </span> 
<div class="indent"> 
  <p>ColdStone utilizes a script called TimThumb to automatically resize images. Whenever you make a new post you will need to add a custom field. Scroll down below the text editor and click on the &quot;custom fields&quot; link. In the &quot;Key&quot; section, input &quot;Thumbnail&quot; (this is case sensitive). In the &quot;Value&quot; area, input the url to your thumbnail image. Your image will automatically be resized and cropped. The image must be hosted on your domain. (this is to protect against bandiwdth left) </p> 
  <p>You will also need to add thumbnails to your featured articles. To add a featured thumbnail, create a second custom field with the key &quot;Featured&quot; and the Value of your image URL. </p> 
  <p><span class="style1">Important Note: You <u>must</u> CHMOD the &quot;cache&quot; folder located in the ColdStone directory to 777 for this script to work. You can CHMOD (change the permissions) of a file using your favorite FTP program. If you are confused try folowing <a href="http://www.siteground.com/tutorials/ftp/ftp_chmod.htm"><u>this tutorial</u></a><u>.</u> Of course instead of CHMODing the template folder (as in the tutorial) you would CHMOD the &quot;cache&quot; folder found within your theme's directory. </span></p> 
</div> 
<span class="boldtext">3. How do I add my title/logo? </span> 
<div class="indent">In this theme, the title/logo is an image, which means you will need an image editor to add your own text. You can do this by opening the blank logo image located at Photoshop Files/blank_logo.png, or by opening the logo PSD file located at Photoshop Files/logo.psd. Replace the old logo with the edited logo by placing it in the following directory: theme/ColdStone/images. If you need more room, or would like to edit the logo further, you can always do so by opening the original fully layered PSD file located at Photoshop Files/ColdStone.psd. You shoud save you logo image as &quot;logo.png&quot; and replace the &quot;logo.png&quot; file that is in the /images/ folder. </div> 
 
<span class="boldtext">4. How do I manage advertisements on my blog? </span> 
<div class="indent">You can change the images used in each of the advertisements, as well as which URL each ad points to, through the custom option pages found in wp-admin. Once logged in to the wordpress admin panel, click &quot;Design&quot; and then &quot;Current Theme Options&quot; to reveal the various theme options. </div> 
 
<span class="boldtext">5. Can I change how many recent posts are displayed on the homepage? </span> 
<div class="indent">You sure can. The number of recent posts being displayed on the homepage can be changed at any time via the custom option pages in wp-admin. </div> 
 
<span class="boldtext">6. How do I setup the Featured Articles on the homepage? </span> 
<div class="indent"> 
  <p>The Featured Articles are pulled from a specific category. You can choose which category is used for the Featured Articles section via the Theme Options page in wp-admin. Under the General > Featured Articles section of ePanel (the elegant themes options page) you will see a dropdown menu where you can choose your featured articles category.</p></div> 