<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$WFk0ZTNjSWdIbThWM3czNg$IjDhVoVDvS6bQw1l0OxlBT5MclngoTYrdJGZYaEyBbQ',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'bootstrap_package' => [
            'disableCssProcessing' => '0',
            'disableGoogleFontCaching' => '0',
            'disablePageTsBackendLayouts' => '0',
            'disablePageTsContentElements' => '0',
            'disablePageTsRTE' => '0',
            'disablePageTsTCADefaults' => '0',
            'disablePageTsTCEFORM' => '0',
            'disablePageTsTCEMAIN' => '0',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'ig_ldap_sso_auth' => [
            'BEfailsafe' => '0',
            'TYPO3BEGroupExist' => '0',
            'TYPO3BEGroupsNotSynchronize' => '0',
            'TYPO3BEUserExist' => '0',
            'TYPO3FEDeleteUserIfNoLDAPGroups' => '0',
            'TYPO3FEDeleteUserIfNoTYPO3Groups' => '0',
            'TYPO3FEGroupExist' => '0',
            'TYPO3FEGroupsNotSynchronize' => '0',
            'TYPO3FEUserExist' => '0',
            'enableBELDAPAuthentication' => '0',
            'enableBESSO' => '0',
            'enableFELDAPAuthentication' => '0',
            'enableFESSO' => '0',
            'forceLowerCaseUsername' => '0',
            'keepBEGroups' => '0',
            'keepBESSODomainName' => '0',
            'keepFEGroups' => '0',
            'keepFESSODomainName' => '0',
            'throwExceptionAtLogin' => '1',
            'useExtConfConfiguration' => '0',
        ],
        'liszt_bibliography' => [
            'elasticBulkSize' => '20',
            'elasticIndexName' => 'zotero',
            'elasticLocaleIndexName' => 'zoterolocales',
            'zoteroApiKey' => 'xgC1nXqyHO2eYOq2M7Dj7V5q',
            'zoteroBulkSize' => '50',
            'zoteroGroupId' => '5080468',
            'zoteroUserId' => '7071210',
        ],
        'liszt_catalograisonne' => [
            'elasticSourceIndexName' => 'source',
            'elasticWorkIndexName' => 'work',
            'marcFileFolder' => 'Marc_Dateien',
            'mermeidUrl' => 'http://sdvtypo3lisztqwvz:8080/',
        ],
        'liszt_common' => [
            'elasticCaFileFilePath' => '',
            'elasticCredentialsFilePath' => '',
            'elasticHostName' => 'elasticsearch',
            'elasticPwdFileName' => '',
        ],
        'news' => [
            'advancedMediaPreview' => '1',
            'archiveDate' => 'date',
            'categoryBeGroupTceFormsRestriction' => '0',
            'categoryRestriction' => '',
            'contentElementPreview' => '1',
            'contentElementRelation' => '1',
            'dateTimeNotRequired' => '0',
            'hidePageTreeForAdministrationModule' => '0',
            'manualSorting' => '0',
            'mediaPreview' => 'false',
            'prependAtCopy' => '1',
            'resourceFolderImporter' => '/news_import',
            'rteForTeaser' => '0',
            'showAdministrationModule' => '1',
            'showImporter' => '0',
            'slugBehaviour' => 'unique',
            'storageUidImporter' => '1',
            'tagPid' => '1',
        ],
        'ns_twitter' => [
            'authkey' => '1537357054582702080-5nuaOON31I4E5ZfcepSViCGBcGvF2Z',
            'authtoken' => 'zGsuu6fZZAxX0bfZCilwfFQAhzehLX4AXkadmrZ24bEXp',
            'key' => 'orlptLrQP8zuWFYI2wULkixA6',
            'secret' => 'H39G9RYGVSCS3FPtrxSgVHL8FVG8reHWPW5RvObhxfzHfNy1zJ',
        ],
    ],
    'FE' => [
        'debug' => true,
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailhog sendmail test@example.org --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pagesection' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => 'eda9e081d3457833b82719bbc0582e685439ebca84d58f038716191f55ac96b5842069ada45bd6e4b174a29e4b74968b',
        'exceptionalErrors' => 12290,
        'features' => [
            'yamlImportsFollowDeclarationOrder' => true,
        ],
        'sitename' => 'Liszt-Portal',
        'systemMaintainers' => [
            1,
        ],
    ],
];
