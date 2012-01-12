role :web, "shak.si"                          # Your HTTP server, Apache/etc
role :app, "shak.si"                          # This may be the same as your `Web` server
role :db,  "shak.si", :primary => true        # This is where Rails migrations will run
set :deploy_to, "/home8/somalis1/public_html/uss"
