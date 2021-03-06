<?php

return <<<STRING

parameters:
    app_locales: en|fr|it
    
    # Default Assets
    assets_default_agent_profile_image_path: 'bundles/uvdeskcoreframework/images/uv-avatar-batman.png'
    assets_default_customer_profile_image_path: 'bundles/uvdeskcoreframework/images/uv-avatar-ironman.png'
    assets_default_helpdesk_profile_image_path: 'bundles/uvdeskcoreframework/images/uv-avatar-uvdesk.png'

    uvdesk_site_path.member_prefix: member
    uvdesk_site_path.knowledgebase_customer_prefix: customer

uvdesk:
    site_url: '{{ SITE_URL }}'
    upload_manager:
        id: Webkul\UVDesk\CoreFrameworkBundle\FileSystem\UploadManagers\Localhost
    
    support_email:
        id: {{ SUPPORT_EMAIL_ID }}
        name: {{ SUPPORT_EMAIL_NAME }}
        mailer_id: {{ SUPPORT_EMAIL_MAILER_ID }}
    
    # Default resources
    default:
        ticket:
            type: support
            status: open
            priority: low
        templates:
            email: mail.html.twig

STRING;
   
?>