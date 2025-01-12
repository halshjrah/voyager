<?php

return [
    'data_rows'  => [
        'author'           => 'Συγγραφέας',
        'avatar'           => 'Εικόνα προφίλ',
        'body'             => 'Σώμα κειμένου',
        'category'         => 'Κατηγορία',
        'created_at'       => 'Δημιουργήθηκε στις',
        'display_name'     => 'Εμφανιζόμενο όνομα',
        'email'            => 'Email',
        'excerpt'          => 'Απόσπασμα',
        'featured'         => 'Επιλεγμένο',
        'id'               => 'ID',
        'meta_description' => 'Meta Description',
        'meta_keywords'    => 'Meta Keywords',
        'name'             => 'Όνομα',
        'order'            => 'Σειρά',
        'page_image'       => 'Εικόνα σελίδας',
        'parent'           => 'Γονέας',
        'password'         => 'Κωδικός',
        'post_image'       => 'Εικόνα άρθρου',
        'remember_token'   => 'Remember Token',
        'role'             => 'Ρόλος',
        'seo_title'        => 'Τίτλος SEO',
        'slug'             => 'Μόνιμος σύνδεσμος',
        'status'           => 'Κατάσταση',
        'title'            => 'Τίτλος',
        'updated_at'       => 'Ενημερώθηκε στις',
    ],
    'data_types' => [
        'category' => [
            'singular' => 'Κατηγορία',
            'plural'   => 'ΚΑτηγορίες',
        ],
        'menu'     => [
            'singular' => 'Μενού',
            'plural'   => 'Μενού',
        ],
        'page'     => [
            'singular' => 'Σελίδα',
            'plural'   => 'Σελίδες',
        ],
        'post'     => [
            'singular' => 'Άρθρο',
            'plural'   => 'Άρθρα',
        ],
        'role'     => [
            'singular' => 'Ρόλος',
            'plural'   => 'Ρόλοι',
        ],
        'user'     => [
            'singular' => 'Χρήστης',
            'plural'   => 'Χρήστες',
        ],
    ],
    'menu_items' => [
        'bread'        => 'BREAD',
        'categories'   => 'Κατηγορίες',
        'compass'      => 'Πυξίδα',
        'dashboard'    => 'Πίνακας ελέγχου',
        'database'     => 'Βάση Δεδομένων',
        'media'        => 'Αρχεία',
        'menu_builder' => 'Δόμηση μενού',
        'pages'        => 'Σελίδες',
        'posts'        => 'Άρθρα',
        'roles'        => 'Ρόλοι',
        'settings'     => 'Ρυθμίσεις',
        'tools'        => 'Εργαλεία',
        'users'        => 'Χρήστες',
    ],
    'roles'      => [
        'admin' => 'Διαχειριστής',
        'user'  => 'Απλός χρήστης',
    ],
    'settings'   => [
        'admin' => [
            'background_image'           => 'Εικόνα υπόβαθρου για τον τομέα διαχείρισης',
            'description'                => 'Περιγραφή τομέα διαχείρισης',
            'description_value'          => 'Καλωσήρθατε στο SHJARAH. Το διαχειριστικό εργαλείο που έλειπε από την Laravel',
            'google_analytics_client_id' => 'Google Analytics Client ID (χρησιμοποιείται για τον πίνακα ελέγχου)',
            'icon_image'                 => 'Εικονίδιο τομέα διαχείρισης',
            'loader'                     => 'Εικονίδιο φόρτωσης στον τομέα διαχείρισης',
            'title'                      => 'Τίτλος τομέα διαχείρισης',
        ],
        'site'  => [
            'description'                  => 'Περιγραφή του Site',
            'google_analytics_tracking_id' => 'Google Analytics Tracking ID',
            'logo'                         => 'Λογότυπο του Site',
            'title'                        => 'Τίτλος του Site',
        ],
    ],
];
