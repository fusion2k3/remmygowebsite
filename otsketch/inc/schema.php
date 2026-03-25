<?php
// Organisation Schema Markup for Remittance Go
function rg_organisation_schema() {
    $schema = [
        '@context' => 'https://schema.org',
        '@graph'   => [

            [
                '@type' => 'Organization',
                '@id'   => 'https://remittancego.com/#organization',
                'name'  => 'RemittanceGo',
                'url'   => 'https://remittancego.com/',
                'logo'  => [
                    '@type'      => 'ImageObject',
                    '@id'        => 'https://remittancego.com/#/schema/logo/image/',
                    'inLanguage' => 'en-AU',
                    'url'        => 'https://remittancego.com/wp-content/uploads/2023/02/favicon.png',
                    'contentUrl' => 'https://remittancego.com/wp-content/uploads/2023/02/favicon.png',
                    'width'      => 180,
                    'height'     => 180,
                    'caption'    => 'RemittanceGo',
                ],
                'image' => [
                    '@id' => 'https://remittancego.com/#/schema/logo/image/',
                ],
                'sameAs' => [
                    'https://www.linkedin.com/company/remittancego',
                ],
            ],

            [
                '@type'       => 'WebSite',
                '@id'         => 'https://remittancego.com/#website',
                'url'         => 'https://remittancego.com/',
                'name'        => 'RemittanceGo',
                'description' => 'AI-powered remittance advice reconciliation software for Xero',
                'publisher'   => [
                    '@id' => 'https://remittancego.com/#organization',
                ],
                'inLanguage'      => 'en-AU',
                'potentialAction' => [
                    '@type'       => 'SearchAction',
                    'target'      => [
                        '@type'       => 'EntryPoint',
                        'urlTemplate' => 'https://remittancego.com/?s={search_term_string}',
                    ],
                    'query-input' => [
                        '@type'         => 'PropertyValueSpecification',
                        'valueRequired' => true,
                        'valueName'     => 'search_term_string',
                    ],
                ],
            ],

            [
                '@type'         => 'WebPage',
                '@id'           => 'https://remittancego.com/',
                'url'           => 'https://remittancego.com/',
                'name'          => 'Remittance Go | PDF Remittance Advice Reconciliation in Xero',
                'description'   => 'The fastest way to reconcile Xero batch payments. Simply upload your PDF remittance advice & watch our AI match complex payments in seconds.',
                'isPartOf'      => [ '@id' => 'https://remittancego.com/#website' ],
                'about'         => [ '@id' => 'https://remittancego.com/#software' ],
                'datePublished' => '2023-09-04T00:27:28+00:00',
                'dateModified'  => '2026-03-17T03:37:22+00:00',
                'inLanguage'    => 'en-AU',
                'breadcrumb'    => [ '@id' => 'https://remittancego.com/#breadcrumb' ],
                'potentialAction' => [
                    '@type'  => 'ReadAction',
                    'target' => [ 'https://remittancego.com/' ],
                ],
            ],

            [
                '@type' => 'BreadcrumbList',
                '@id'   => 'https://remittancego.com/#breadcrumb',
                'itemListElement' => [
                    [
                        '@type'    => 'ListItem',
                        'position' => 1,
                        'name'     => 'Home',
                        'item'     => 'https://remittancego.com/',
                    ],
                ],
            ],

            [
                '@type'                  => 'SoftwareApplication',
                '@id'                    => 'https://remittancego.com/#software',
                'name'                   => 'RemittanceGo',
                'url'                    => 'https://remittancego.com/',
                'applicationCategory'    => 'BusinessApplication',
                'applicationSubCategory' => 'Accounting Software',
                'operatingSystem'        => 'Web',
                'browserRequirements'    => 'Requires a modern web browser',
                'description'            => 'RemittanceGo automates PDF remittance advice reconciliation for Xero. Upload a remittance PDF and AI instantly matches payments to invoices — including split payments — saving accounts teams up to 8 hours per week per client.',
                'offers' => [
                    '@type'       => 'Offer',
                    'price'       => '0',
                    'priceCurrency' => 'AUD',
                    'description' => 'Free trial available. Paid plans for ongoing use.',
                ],
                'featureList' => [
                    'PDF remittance advice parsing',
                    'Automated invoice matching',
                    'Split payment handling',
                    'Xero batch payment reconciliation',
                    'AI-powered matching engine',
                    'Audit log',
                ],
                'audience' => [
                    '@type'        => 'Audience',
                    'audienceType' => 'Bookkeepers, Accountants, Accounts Receivable Teams',
                ],
                'publisher' => [
                    '@id' => 'https://remittancego.com/#organization',
                ],
                'aggregateRating' => [
                    '@type'       => 'AggregateRating',
                    'ratingValue' => '5',
                    'reviewCount' => '10',
                    'bestRating'  => '5',
                    'worstRating' => '1',
                ],
            ],

        ],
    ];

    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
}
add_action( 'wp_head', 'rg_organisation_schema' );
