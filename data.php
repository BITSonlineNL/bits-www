<?php
// data.php - Fully demo-ready visuals for all items

$default_visual_image = [
    'type' => 'image',
    'src'  => 'images/default-placeholder.png',
    'thumb'=> 'images/default-placeholder-thumb.png',
    'alt'  => 'Visual placeholder'
];

$default_visual_video = [
    'type' => 'video',
    'src'  => 'videos/default-placeholder.mp4',
    'thumb'=> 'images/default-video-thumb.png',
    'alt'  => 'Video placeholder'
];

$sections = [
    'menu_services' => [
        'id'    => 'menu_services',
        'title' => 'Diensten',
        'items' => [
            [
                'id'=>'service_1',
                'title'=>'Technische Infrastructuur',
                'slug'=>'technische-infrastructuur',
                'summary'=>'Opzetten en beheren van netwerken, servers en IT-infrastructuur on-premises en in de cloud.',
                'description'=>'Wij zorgen voor stabiele en veilige netwerken en serveromgevingen, zodat uw bedrijf altijd operationeel blijft.',
                'tags'=>['Infrastructure','On-Prem','Cloud'],
                'icon'=>'🖥️',
                'date'=>'2025-01-01',
                'visuals'=>[
                    ['type'=>'image','src'=>'images/infrastructure-diagram.png','thumb'=>'images/infrastructure-diagram-thumb.png','alt'=>'Infrastructuur diagram'],
                    ['type'=>'video','src'=>'videos/infrastructure-overview.mp4','thumb'=>'images/infrastructure-overview-thumb.png','alt'=>'Infrastructuur overzicht animatie']
                ]
            ],
            [
                'id'=>'service_2',
                'title'=>'Cloud & Virtualisatie',
                'slug'=>'cloud-virtualisatie',
                'summary'=>'Expertise in VMware, Citrix en Microsoft cloud-oplossingen voor optimale flexibiliteit en schaalbaarheid.',
                'description'=>'Uw bedrijf in de cloud, zonder zorgen. Veilige, schaalbare en betrouwbare cloudomgevingen met BITS.',
                'tags'=>['Cloud','VMware','Citrix'],
                'icon'=>'☁️',
                'date'=>'2025-01-02',
                'visuals'=>[
                    ['type'=>'image','src'=>'images/cloud-architecture.png','thumb'=>'images/cloud-architecture-thumb.png','alt'=>'Cloud architectuur infographic'],
                    ['type'=>'video','src'=>'videos/cloud-migration.mp4','thumb'=>'images/cloud-migration-thumb.png','alt'=>'Animatie on-premise naar cloud']
                ]
            ],
            [
                'id'=>'service_3',
                'title'=>'Netwerk & Beveiliging',
                'slug'=>'netwerk-beveiliging',
                'summary'=>'Veilige netwerkconfiguraties met focus op bescherming tegen bedreigingen en optimale prestaties.',
                'description'=>'Uw netwerk veilig, uw data beschermd. End-to-end beveiliging en netwerkbeheer door BITS.',
                'tags'=>['Network','Security'],
                'icon'=>'🔒',
                'date'=>'2025-01-03',
                'visuals'=>[
                    ['type'=>'image','src'=>'images/security-layers.png','thumb'=>'images/security-layers-thumb.png','alt'=>'Beveiligingslagen infographic'],
                    ['type'=>'video','src'=>'videos/security-demo.mp4','thumb'=>'images/security-demo-thumb.png','alt'=>'Veilig verkeer animatie']
                ]
            ],
            [
                'id'=>'service_4',
                'title'=>'IT Ondersteuning',
                'slug'=>'it-ondersteuning',
                'summary'=>'Snelle en betrouwbare ondersteuning voor al uw IT-problemen en technische vraagstukken.',
                'description'=>'Directe en deskundige support zodat uw IT altijd operationeel blijft, zonder downtime.',
                'tags'=>['Support','Helpdesk'],
                'icon'=>'🛠️',
                'date'=>'2025-01-04',
                'visuals'=>[
                    ['type'=>'image','src'=>'images/support-helpdesk.png','thumb'=>'images/support-helpdesk-thumb.png','alt'=>'IT ondersteuning infographic'],
                    ['type'=>'video','src'=>'videos/support-demo.mp4','thumb'=>'images/support-demo-thumb.png','alt'=>'Support proces animatie']
                ]
            ],
            [
                'id'=>'service_5',
                'title'=>'Systeembeheer',
                'slug'=>'systeembeheer',
                'summary'=>'Proactief beheer van uw IT-omgeving voor continue beschikbaarheid en optimale performance.',
                'description'=>'Wij beheren servers, werkstations en applicaties zodat uw systemen betrouwbaar en performant blijven.',
                'tags'=>['Systems','Monitoring'],
                'icon'=>'📊',
                'date'=>'2025-01-05',
                'visuals'=>[
                    ['type'=>'image','src'=>'images/systems-monitoring.png','thumb'=>'images/systems-monitoring-thumb.png','alt'=>'Systeembeheer dashboard'],
                    ['type'=>'video','src'=>'videos/monitoring-demo.mp4','thumb'=>'images/monitoring-demo-thumb.png','alt'=>'Monitoring animatie']
                ]
            ],
            [
                'id'=>'service_6',
                'title'=>'IT Advies',
                'slug'=>'it-advies',
                'summary'=>'Strategisch advies om uw IT-infrastructuur toekomstbestendig en efficiënt te maken.',
                'description'=>'BITS helpt u bij digitale transformatie en architectuuradvies voor een toekomstbestendige IT.',
                'tags'=>['Consulting','Strategy'],
                'icon'=>'💡',
                'date'=>'2025-01-06',
                'visuals'=>[
                    ['type'=>'image','src'=>'images/consulting-strategy.png','thumb'=>'images/consulting-strategy-thumb.png','alt'=>'IT advies infographic'],
                    ['type'=>'video','src'=>'videos/consulting-demo.mp4','thumb'=>'images/consulting-demo-thumb.png','alt'=>'Adviestraject animatie']
                ]
            ]
        ]
    ],
    'menu_projects' => [
        'id'    => 'menu_projects',
        'title' => 'Projecten & Expertise',
        'items' => [
            [
                'id'=>'project_1',
                'title'=>'Enterprise Infrastructuur',
                'slug'=>'enterprise-infrastructuur',
                'summary'=>'Implementatie van enterprise-grade netwerk- en serverinfrastructuur voor middelgrote organisaties met focus op schaalbaarheid en betrouwbaarheid.',
                'description'=>'Wij bouwen robuuste infrastructuren die groei en continuïteit garanderen.',
                'tags'=>['Enterprise','Network','Server'],
                'icon'=>'🏢',
                'date'=>'2025-02-01',
                'visuals'=>[
                    ['type'=>'image','src'=>'images/enterprise-infra.png','thumb'=>'images/enterprise-infra-thumb.png','alt'=>'Enterprise infrastructuur'],
                    ['type'=>'video','src'=>'videos/enterprise-demo.mp4','thumb'=>'images/enterprise-demo-thumb.png','alt'=>'Enterprise project animatie']
                ]
            ],
            [
                'id'=>'project_2',
                'title'=>'Cloud Migraties',
                'slug'=>'cloud-migraties',
                'summary'=>'Begeleiding bij migratie naar Microsoft Azure en AWS, inclusief hybride cloud-oplossingen met VMware vSphere.',
                'description'=>'Hybride migraties verlopen soepel, veilig en zonder downtime, zodat uw bedrijf altijd operationeel blijft.',
                'tags'=>['Cloud','Migration','Azure','AWS'],
                'icon'=>'☁️',
                'date'=>'2025-02-02',
                'visuals'=>[
                    ['type'=>'image','src'=>'images/cloud-migration.png','thumb'=>'images/cloud-migration-thumb.png','alt'=>'Cloud migratie roadmap'],
                    ['type'=>'video','src'=>'videos/migration-process.mp4','thumb'=>'images/migration-process-thumb.png','alt'=>'Migratie proces animatie']
                ]
            ],
            [
                'id'=>'project_3',
                'title'=>'Virtualisatie Platforms',
                'slug'=>'virtualisatie-platforms',
                'summary'=>'Implementatie van Citrix XenServer en VMware vSphere omgevingen voor geoptimaliseerde resource-allocatie en disaster recovery.',
                'description'=>'Optimaliseer uw IT-resources en verbeter disaster recovery door virtualisatie.',
                'tags'=>['VMware','Citrix','Virtualization'],
                'icon'=>'🖥️',
                'date'=>'2025-02-03',
                'visuals'=>[
                    ['type'=>'image','src'=>'images/virtualization-platform.png','thumb'=>'images/virtualization-platform-thumb.png','alt'=>'Virtualisatie architectuur'],
                    ['type'=>'video','src'=>'videos/virtualization-demo.mp4','thumb'=>'images/virtualization-demo-thumb.png','alt'=>'Virtualisatie animatie']
                ]
            ],
            [
                'id'=>'project_4',
                'title'=>'Security & Compliance',
                'slug'=>'security-compliance',
                'summary'=>'Implementatie van beveiligingsoplossingen conform ISO 27001 en AVG-richtlijnen, inclusief netwerksegmentatie en access controls.',
                'description'=>'End-to-end security en compliance voor een betrouwbare en veilige IT-omgeving.',
                'tags'=>['Security','Compliance','ISO27001'],
                'icon'=>'🔒',
                'date'=>'2025-02-04',
                'visuals'=>[
                    ['type'=>'image','src'=>'images/compliance-framework.png','thumb'=>'images/compliance-framework-thumb.png','alt'=>'Compliance framework'],
                    ['type'=>'video','src'=>'videos/compliance-demo.mp4','thumb'=>'images/compliance-demo-thumb.png','alt'=>'Security compliance animatie']
                ]
            ],
            [
                'id'=>'project_5',
                'title'=>'Monitoring & Management',
                'slug'=>'monitoring-management',
                'summary'=>'Opzetten van proactieve monitoring systemen met Ivanti en Microsoft SCCM voor optimale systeemprestaties en preventief onderhoud.',
                'description'=>'Continue monitoring en beheer voor maximale performance en minimale uitval.',
                'tags'=>['Monitoring','Management'],
                'icon'=>'📊',
                'date'=>'2025-02-05',
                'visuals'=>[
                    ['type'=>'image','src'=>'images/monitoring-dashboard.png','thumb'=>'images/monitoring-dashboard-thumb.png','alt'=>'Monitoring dashboard'],
                    ['type'=>'video','src'=>'videos/monitoring-overview.mp4','thumb'=>'images/monitoring-overview-thumb.png','alt'=>'Monitoring systeem animatie']
                ]
            ],
            [
                'id'=>'project_6',
                'title'=>'Technologie Advies',
                'slug'=>'technologie-advies',
                'summary'=>'Strategische IT-roadmaps en architectuuradvies voor digitale transformatie, met focus op moderne technologieën en best practices.',
                'description'=>'Wij bieden strategisch advies voor een toekomstbestendige digitale transformatie.',
                'tags'=>['Consulting','Strategy','Tech'],
                'icon'=>'💡',
                'date'=>'2025-02-06',
                'visuals'=>[
                    ['type'=>'image','src'=>'images/tech-roadmap.png','thumb'=>'images/tech-roadmap-thumb.png','alt'=>'Technologie roadmap'],
                    ['type'=>'video','src'=>'videos/tech-consulting.mp4','thumb'=>'images/tech-consulting-thumb.png','alt'=>'Tech advies animatie']
                ]
            ]
        ]
    ],
    'menu_blog' => [
        'id'    => 'menu_blog',
        'title' => 'Blog: Inzichten & Trends',
        'items' => [
            [
                'id'=>'blog_article_1',
                'title'=>'Netwerk Virtualisatie Trends 2025',
                'slug'=>'netwerk-virtualisatie-trends-2025',
                'summary'=>'Een diepgaande analyse van SDN en hoe deze technologieën bedrijfsnetwerken transformeren.',
                'description'=>'Een diepgaande analyse van SDN en hoe deze technologieën bedrijfsnetwerken transformeren.',
                'tags'=>['Network','SDN','Trends'],
                'date'=>'2025-03-01',
                'visuals'=>[
                    ['type'=>'image','src'=>'images/sdn-trends.png','thumb'=>'images/sdn-trends-thumb.png','alt'=>'SDN trends infographic'],
                    ['type'=>'video','src'=>'videos/sdn-overview.mp4','thumb'=>'images/sdn-overview-thumb.png','alt'=>'SDN technologie animatie']
                ]
            ]
        ]
    ]
];

?>