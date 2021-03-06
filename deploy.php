<?php
namespace Deployer;

require 'recipe/symfony4.php';

// Project name
set('application', 'colours');

// Project repository
set('repository', 'git@github.com:epson121/colours.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);
set('allow_anonymous_stats', false);

/*
 * Hosts
 */
inventory('hosts.yml');   
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});



// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
