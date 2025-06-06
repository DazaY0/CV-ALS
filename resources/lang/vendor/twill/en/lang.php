<?php
    /*
    |--------------------------------------------------------------------------
    | 5 Steps to Contribute a New Twill Localization at Ease
    |--------------------------------------------------------------------------
    | 1. Find the "lang.csv" under "lang" directory.
    | 2. Import the csv file into a blank Google Sheet.
    | 3. Each column is a language, enter the translation for a column. (tips: feel free to freeze rows and columns).
    | 4. Download the Google Sheet as CSV, replace the original "lang/lang.csv" with the new one.
    | 5. Run the command "php artisan twill:lang" to sync all lang files.
    */


return [
    'donate' => 'Donate',
    'auth' => [
        'back-to-login' => 'Back to Login',
        'choose-password' => 'Choose password',
        'email' => 'Email',
        'forgot-password' => 'Forgot password',
        'login' => 'Login',
        'login-title' => 'Login',
        'oauth-link-title' => 'Re-enter your password to link :provider to your account',
        'otp' => 'One-time password',
        'password' => 'Password',
        'password-confirmation' => 'Confirm password',
        'reset-password' => 'Reset password',
        'reset-send' => 'Send password reset link',
        'verify-login' => 'Verify login',
        'auth-causer' => 'Authentication',
    ],
    'buckets' => [
        'intro' => 'What would you like to feature today?',
        'none-available' => 'No items available.',
        'none-featured' => 'No items featured.',
        'publish' => 'Publish',
        'source-title' => 'Available items',
    ],
    'dashboard' => [
        'all-activity' => 'All activity',
        'create-new' => 'Create new',
        'empty-message' => 'You don\'t have any activity yet.',
        'my-activity' => 'My activity',
        'my-drafts' => 'My drafts',
        'search-placeholder' => 'Search everything...',
        'statitics' => 'Statistics',
        'search' => [
            'loading' => 'Loading…',
            'no-result' => 'No results found.',
            'last-edit' => 'Last edited',
        ],
        'activities' => [
            'created' => 'Created',
            'updated' => 'Updated',
            'unpublished' => 'Unpublished',
            'published' => 'Published',
            'featured' => 'Featured',
            'unfeatured' => 'Unfeatured',
            'restored' => 'Restored',
            'deleted' => 'Deleted',
            'login' => 'Login action',
            'logout' => 'Logout action',
            'duplicated' => 'Duplicated',
        ],
        'activity-row' => [
            'edit' => 'Edit',
            'view-permalink' => 'View Permalink',
            'by' => 'by',
        ],
        'unknown-author' => 'Unknown',
    ],
    'dialog' => [
        'cancel' => 'Cancel',
        'ok' => 'OK',
        'title' => 'Move to Trash',
    ],
    'editor' => [
        'cancel' => 'Cancel',
        'delete' => 'Delete',
        'done' => 'Done',
        'title' => 'Content editor',
    ],
    'emails' => [
        'all-rights-reserved' => 'All rights reserved.',
        'hello' => 'Hello!',
        'problems' => 'If you are having trouble clicking the ":actionText" button, copy and paste the URL below into your web browser: [:url](:url)',
        'regards' => 'Regards,',
    ],
    'fields' => [
        'block-editor' => [
            'add-content' => 'Add content',
            'collapse-all' => 'Collapse all',
            'create-another' => 'Create another',
            'delete' => 'Delete',
            'expand-all' => 'Expand all',
            'loading' => 'Loading',
            'open-in-editor' => 'Open in editor',
            'preview' => 'Preview',
            'add-item' => 'Add item',
            'clone-block' => 'Clone block',
            'select-existing' => 'Select existing',
        ],
        'browser' => [
            'add-label' => 'Add',
            'attach' => 'Attach',
        ],
        'files' => [
            'add-label' => 'Add',
        ],
        'generic' => [
            'switch-language' => 'Switch language',
        ],
        'map' => [
            'hide' => 'Hide&nbsp;map',
            'show' => 'Show&nbsp;map',
        ],
        'medias' => [
            'btn-label' => 'Attach image',
            'crop' => 'Crop',
            'crop-edit' => 'Edit image crop',
            'crop-list' => 'crop',
            'crop-save' => 'Update',
            'delete' => 'Delete',
            'download' => 'Download',
            'edit-close' => 'Close info',
            'edit-info' => 'Edit info',
            'original-dimensions' => 'Original',
            'alt-text' => 'Alt Text',
            'caption' => 'Caption',
            'video-url' => 'Video URL (optional)',
        ],
    ],
    'filter' => [
        'apply-btn' => 'Apply',
        'clear-btn' => 'Clear',
        'search-placeholder' => 'Search',
        'toggle-label' => 'Filter',
    ],
    'footer' => [
        'version' => 'Version',
    ],
    'form' => [
        'content' => 'Content',
        'dialogs' => [
            'delete' => [
                'confirm' => 'Delete',
                'confirmation' => 'Are you sure ?<br />This change can\'t be undone.',
                'delete-content' => 'Delete content',
                'title' => 'Delete content',
            ],
        ],
        'editor' => 'Editor',
        'options' => 'Options',
    ],
    'lang-manager' => [
        'published' => 'Live',
    ],
    'lang-switcher' => [
        'edit-in' => 'Edit in',
    ],
    'listing' => [
        'add-new-button' => 'Add new',
        'bulk-actions' => 'Bulk actions',
        'bulk-clear' => 'Clear',
        'columns' => [
            'featured' => 'Featured',
            'name' => 'Name',
            'published' => 'Published',
            'show' => 'Show',
            'thumbnail' => 'Thumbnail',
        ],
        'dialogs' => [
            'delete' => [
                'confirm' => 'Delete',
                'disclaimer' => 'The item won\'t be deleted but moved to trash.',
                'move-to-trash' => 'Move to trash',
                'title' => 'Delete item',
            ],
            'destroy' => [
                'confirm' => 'Destroy',
                'destroy-permanently' => 'Destroy permanently',
                'disclaimer' => 'The item won\'t be able to be restored anymore.',
                'title' => 'Destroy item',
            ],
        ],
        'dropdown' => [
            'delete' => 'Delete',
            'destroy' => 'Destroy',
            'duplicate' => 'Duplicate',
            'edit' => 'Edit',
            'publish' => 'Publish',
            'feature' => 'Feature',
            'restore' => 'Restore',
            'unfeature' => 'Unfeature',
            'unpublish' => 'Unpublish',
        ],
        'filter' => [
            'no' => 'No',
            'yes' => 'Yes',
            'all-items' => 'All items',
            'draft' => 'Draft',
            'mine' => 'Mine',
            'published' => 'Published',
            'trash' => 'Trash',
            'not-set' => 'Without value',
        ],
        'filters' => [
            'all-label' => 'All :label',
        ],
        'languages' => 'Languages',
        'listing-empty-message' => 'There is no item here yet.',
        'paginate' => [
            'rows-per-page' => 'Rows per page:',
        ],
        'bulk-selected-item' => 'item selected',
        'bulk-selected-items' => 'items selected',
        'reorder' => [
            'success' => ':modelTitle order changed!',
            'error' => ':modelTitle order was not changed. Something wrong happened!',
        ],
        'restore' => [
            'success' => ':modelTitle restored!',
            'error' => ':modelTitle was not restored. Something wrong happened!',
        ],
        'bulk-restore' => [
            'success' => ':modelTitle items restored!',
            'error' => ':modelTitle items were not restored. Something wrong happened!',
        ],
        'force-delete' => [
            'success' => ':modelTitle destroyed!',
            'error' => ':modelTitle was not destroyed. Something wrong happened!',
        ],
        'bulk-force-delete' => [
            'success' => ':modelTitle items destroyed!',
            'error' => ':modelTitle items were not destroyed. Something wrong happened!',
        ],
        'delete' => [
            'success' => ':modelTitle moved to trash!',
            'error' => ':modelTitle was not moved to trash. Something wrong happened!',
        ],
        'bulk-delete' => [
            'success' => ':modelTitle items moved to trash!',
            'error' => ':modelTitle items were not moved to trash. Something wrong happened!',
        ],
        'duplicate' => [
            'success' => ':modelTitle duplicated with Success!',
            'error' => ':modelTitle was not duplicated. Something wrong happened!',
        ],
        'publish' => [
            'unpublished' => ':modelTitle unpublished!',
            'published' => ':modelTitle published!',
            'error' => ':modelTitle was not published. Something wrong happened!',
        ],
        'featured' => [
            'unfeatured' => ':modelTitle unfeatured!',
            'featured' => ':modelTitle featured!',
            'error' => ':modelTitle was not featured. Something wrong happened!',
        ],
        'bulk-featured' => [
            'unfeatured' => ':modelTitle items unfeatured!',
            'featured' => ':modelTitle items featured!',
            'error' => ':modelTitle items were not featured. Something wrong happened!',
        ],
        'bulk-publish' => [
            'unpublished' => ':modelTitle items unpublished!',
            'published' => ':modelTitle items published!',
            'error' => ':modelTitle items were not published. Something wrong happened!',
        ],
    ],
    'main' => [
        'create' => 'Create',
        'draft' => 'Draft',
        'published' => 'Live',
        'title' => 'Title',
        'update' => 'Update',
    ],
    'media-library' => [
        'files' => 'Files',
        'filter-select-label' => 'Filter by tag',
        'images' => 'Images',
        'insert' => 'Insert',
        'sidebar' => [
            'alt-text' => 'Alt text',
            'caption' => 'Caption',
            'clear' => 'Clear',
            'dimensions' => 'Dimensions',
            'empty-text' => 'No file selected',
            'files-selected' => 'files selected',
            'tags' => 'Tags',
        ],
        'title' => 'Media Library',
        'update' => 'Update',
        'unused-filter-label' => 'Show unused only',
        'no-tags-found' => 'Sorry, no tags found.',
        'dialogs' => [
            'delete' => [
                'delete-media-title' => 'Delete media',
                'delete-media-desc' => 'Are you sure ?<br />This change can\'t be undone.',
                'delete-media-confirm' => 'Delete',
                'title' => 'Are you sure ?',
                'allow-delete-multiple-medias' => 'Some files are used and can\'t be deleted. Do you want to delete the others ?',
                'allow-delete-one-media' => 'This file is used and can\'t be deleted. Do you want to delete the others ?',
                'dont-allow-delete-multiple-medias' => 'This files are used and can\'t be deleted.',
                'dont-allow-delete-one-media' => 'This file is used and can\'t be deleted.',
            ],
            'replace' => [
                'replace-media-title' => 'Replace media',
                'replace-media-desc' => 'Are you sure ?<br />This change can\'t be undone.',
                'replace-media-confirm' => 'Replace',
            ],
        ],
        'types' => [
            'single' => [
                'image' => 'image',
                'video' => 'video',
                'file' => 'file',
            ],
            'multiple' => [
                'image' => 'images',
                'video' => 'videos',
                'file' => 'files',
            ],
        ],
    ],
    'modal' => [
        'create' => [
            'button' => 'Create',
            'create-another' => 'Create and add another',
            'title' => 'Add new',
        ],
        'permalink-field' => 'Permalink',
        'title-field' => 'Title',
        'update' => [
            'button' => 'Update',
            'title' => 'Update',
        ],
        'done' => [
            'button' => 'Done',
        ],
    ],
    'nav' => [
        'admin' => 'Admin',
        'cms-users' => 'CMS Users',
        'logout' => 'Logout',
        'media-library' => 'Media Library',
        'settings' => 'Settings',
        'close-menu' => 'Close menu',
        'profile' => 'Profile',
        'open-live-site' => 'Open live site',
    ],
    'notifications' => [
        'reset' => [
            'action' => 'Reset password',
            'content' => 'You are receiving this email because we received a password reset. If you did not request a password reset, no further action is required.',
            'subject' => ':appName | Reset password',
        ],
        'welcome' => [
            'action' => 'Choose your own password',
            'content' => 'You are receiving this email because an account was created for you on :name.',
            'title' => 'Welcome',
            'subject' => ':appName | Welcome',
        ],
    ],
    'overlay' => [
        'close' => 'Close',
    ],
    'previewer' => [
        'compare-view' => 'Compare view',
        'current-revision' => 'Current',
        'editor' => 'Editor',
        'last-edit' => 'Last edited',
        'past-revision' => 'Past',
        'restore' => 'Restore',
        'revision-history' => 'Revision history',
        'single-view' => 'Single view',
        'title' => 'Preview changes',
        'unsaved' => 'Previewing with your unsaved changes',
        'drag-and-drop' => 'Drag and drop content from the left navigation',
    ],
    'publisher' => [
        'cancel' => 'Cancel',
        'current' => 'Current',
        'end-date' => 'End Date',
        'immediate' => 'Immediate',
        'languages' => 'Languages',
        'languages-published' => 'Live',
        'last-edit' => 'Last edited',
        'preview' => 'Preview changes',
        'publish' => 'Publish',
        'publish-close' => 'Publish and close',
        'publish-new' => 'Publish and create new',
        'published-on' => 'Published on',
        'restore-draft' => 'Restore as a draft',
        'restore-draft-close' => 'Restore as a draft and close',
        'restore-draft-new' => 'Restore as a draft and create new',
        'restore-live' => 'Restore as published',
        'restore-live-close' => 'Restore as published and close',
        'restore-live-new' => 'Restore as published and create new',
        'restore-message' => 'You are currently editing an older revision of this content (saved by :user on :date). Make changes if needed and click restore to save a new revision.',
        'restore-success' => 'Revision restored.',
        'revisions' => 'Revisions',
        'save' => 'Save as draft',
        'save-close' => 'Save as draft and close',
        'save-new' => 'Save as draft and create new',
        'save-success' => 'Content saved. All good!',
        'start-date' => 'Start Date',
        'switcher-title' => 'Status',
        'update' => 'Update',
        'update-close' => 'Update and close',
        'update-new' => 'Update and create new',
        'parent-page' => 'Parent page',
        'review-status' => 'Review status',
        'visibility' => 'Visibility',
        'scheduled' => 'Scheduled',
        'expired' => 'Expired',
        'unsaved-changes' => 'There are unsaved changes',
        'draft-revision' => 'Save as draft revision',
        'draft-revision-close' => 'Save as draft revision and close',
        'draft-revision-new' => 'Save as draft revision and create new',
        'draft-revisions-available' => 'You are currently viewing the published version of this content. There are newer draft revisions available.',
        'editing-draft-revision' => 'You are currently editing a draft revision of this content. Make changes if needed and click Save as revision or Publish.',
    ],
    'select' => [
        'empty-text' => 'Sorry, no matching options.',
    ],
    'uploader' => [
        'dropzone-text' => 'or drop new files here',
        'upload-btn-label' => 'Add new',
    ],
    'user-management' => [
        '2fa' => '2-factor authentication',
        '2fa-description' => 'Please scan this QR code with a Google Authenticator compatible application and enter your one time password below before submitting. See a list of compatible applications <a href=":link" target="_blank" rel="noopener">here</a>.',
        '2fa-disable' => 'Enter your one time password to disable the 2-factor authentication',
        'active' => 'Active',
        'cancel' => 'Cancel',
        'content-fieldset-label' => 'Account',
        'description' => 'Description',
        'disabled' => 'Disabled',
        'edit-modal-title' => 'Edit user name',
        'email' => 'Email',
        'enable-user' => 'Enable user',
        'enable-user-and-close' => 'Enable user and close',
        'enable-user-and-create-new' => 'Enable user and create new',
        'enabled' => 'Enabled',
        'language' => 'Language',
        'language-placeholder' => 'Select a language',
        'name' => 'Name',
        'otp' => 'One time password',
        'profile-image' => 'Profile image',
        'role' => 'Role',
        'role-placeholder' => 'Select a role',
        'title' => 'Title',
        'trash' => 'Trash',
        'update' => 'Update',
        'update-and-close' => 'Update and close',
        'update-and-create-new' => 'Update and create new',
        'update-disabled-and-close' => 'Update disabled and close',
        'update-disabled-user' => 'Update disabled user',
        'update-disabled-user-and-create-new' => 'Update disabled user and create new',
        'user-image' => 'Image',
        'users' => 'Users',
        'force-2fa-disable' => 'Disable 2FA',
        'force-2fa-disable-description' => 'Type text shown in the field to disable 2FA for this user',
        'force-2fa-disable-challenge' => 'Disable 2FA for :user',
        'pending' => 'Pending',
        'activation-pending' => 'Pending activation',
    ],
    'settings' => [
        'update' => 'Update',
        'cancel' => 'Cancel',
        'fieldset-label' => 'Edit settings',
    ],
    'permissions' => [
        'groups' => [
            'title' => 'Groups',
            'published' => 'Enabled',
            'draft' => 'Disabled',
        ],
        'roles' => [
            'title' => 'Roles',
            'published' => 'Enabled',
            'draft' => 'Disabled',
        ],
    ],
];
