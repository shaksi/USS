require 'capistrano/ext/multistage'

set :application, "uss"

set :stages,        %w(staging production)
set :default_stage, 'staging'

default_run_options[:pty] = true

# git config
set :scm,                   :git
set :git_enable_submodules, false
set :repository,            "git@github.com:shaksi/USS.git"
set :branch,                'master'

# ssh
set :ssh_options, { :forward_agent => true } # for checking out code from github
set :user,        'somalis1'
set :group,       'somalis1'
set :use_sudo,    false

after 'deploy:setup',       :create_shared_directories
after 'deploy:update_code', :symlink_config_php, :symlink_htaccess, :symlink_uploads, :chmod_uploads

task :create_shared_directories do
  run "mkdir -p #{shared_path}/uploads"
end

task :symlink_config_php do
  run "ln -s #{shared_path}/wp-config.php #{release_path}/wp-config.php" 
end

task :symlink_htaccess do
  run "cp #{shared_path}/.htaccess #{release_path}/.htaccess" 
end

task :symlink_uploads do
  run "ln -s #{shared_path}/uploads #{release_path}/wp-content/uploads" 
end

task :chmod_uploads do
  run "chmod -R 777 #{release_path}/wp-content/uploads" 
end
