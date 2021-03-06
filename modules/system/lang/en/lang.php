<?php

return [
    'app' => [
        'name' => 'October CMS',
        'motto' => 'Getting back to basics',
    ],
    'directory' => [
        'create_fail' => "Cannot create directory: :name",
    ],
    'file' => [
        'create_fail' => "Cannot create file: :name",
    ],
    'system' => [
        'name' => 'System',
        'menu_label' => 'System',
    ],
    'plugin' => [
        'unnamed' => 'Unnamed plugin',
        'name' => [
            'label' => 'Plugin Name',
            'help' => 'Name the plugin by its unique code. For example, RainLab.Blog',
        ],
    ],
    'project' => [
        'name' => 'Project',
        'owner_label' => 'Owner',
        'id' => [
            'label' => 'Project ID',
            'help' => 'How to find your Project ID',
            'missing' => 'Please specify a Project ID to use.',
        ],
        'unbind_success' => 'Project has been detached successfully.',
    ],
    'settings' => [
        'menu_label' => 'Settings',
        'missing_model' => 'The settings page is missing a Model definition.',
        'update_success' => 'Settings for :name have been updated successfully.',
    ],
    'install' => [
        'project_label' => 'Attach to Project',
        'plugin_label' => 'Install Plugin',
        'missing_plugin_name' => 'Please specify a Plugin name to install.',
        'install_completing' => 'Finishing installation process',
        'install_success' => 'The plugin has been installed successfully.',
    ],
    'updates' => [
        'name' => 'Software update',
        'menu_label' => 'Updates',
        'check_label' => 'Check for updates',
        'retry_label' => 'Try again',
        'core_build' => 'Current build',
        'core_build_old' => 'Current build :build',
        'core_build_new' => 'Build :build',
        'core_build_new_help' => 'Latest build is available.',
        'core_downloading' => 'Downloading application files',
        'core_extracting' => 'Unpacking application files',
        'plugin_downloading' => 'Downloading plugin: :name',
        'plugin_extracting' => 'Unpacking plugin: :name',
        'plugin_version_none' => 'New plugin',
        'plugin_version_old' => 'Current v:version',
        'plugin_version_new' => 'v:version',
        'update_label' => 'Update software',
        'update_completing' => 'Finishing update process',
        'update_loading' => 'Loading available updates...',
        'update_success' => 'The update process was performed successfully.',
        'update_failed_label' => 'Update failed',
        'force_label' => 'Force update',
        'found' => [
            'label' => 'Found new updates!',
            'help' => 'Click Update software to begin the update process.',
        ],
        'none' => [
            'label' => 'No updates',
            'help' => 'No new updates were found.',
        ],
    ],
    'server' => [
        'connect_error' => 'Error connecting to the server.',
        'response_not_found' => 'The update server could not be found.',
        'response_invalid' => 'Invalid response from the server.',
        'response_empty' => 'Empty response from the server.',
        'file_error' => 'Server failed to deliver the package.',
        'file_corrupt' => 'File from server is corrupt.',
    ],
    'behavior' => [
        'missing_property' => 'Class :class must define property $:property used by :behavior behavior.',
    ],
    'config' => [
        'not_found' => 'Unable to find configuration file :file defined for :location.',
        'required' => 'Configuration used in :location must supply a value :property.',
    ],
    'zip' => [
        'extract_failed' => "Unable to extract core file ':file'.",
    ],
];