<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $techStack = [
            'HTML5', 'CSS3', 'JavaScript', 'React', 'Flutter',
            'Node.js', 'Laravel', 'Tailwind CSS', 'Git', 'Figma',
            'Firebase', 'REST API', 'MySQL', 'PHP'
        ];

        $experiences = [
            [
                'role' => 'Mobile App Developer',
                'company' => 'Freelance & Personal Projects',
                'period' => '2023 — Present',
                'description' => [
                    'Mengembangkan aplikasi Android menggunakan Flutter',
                    'Membangun UI/UX yang responsif dan user-friendly',
                    'Integrasi API dan Firebase untuk backend services'
                ]
            ],
            [
                'role' => 'Web Developer',
                'company' => 'Kampung Soligrafitas & Client Projects',
                'period' => '2022 — 2024',
                'description' => [
                    'Membangun website portfolio dan landing page modern',
                    'Menggunakan Laravel, Tailwind CSS, dan JavaScript',
                    'Kolaborasi desain dengan tim kreatif'
                ]
            ],
            [
                'role' => 'Graphic & UI Designer',
                'company' => 'Various Clients',
                'period' => '2021 — 2023',
                'description' => [
                    'Desain visual untuk media sosial dan branding',
                    'Pembuatan UI design untuk aplikasi mobile',
                    'Menguasai Adobe Photoshop, Illustrator, dan Figma'
                ]
            ]
        ];

      $projects = [
    [
        'id' => 1,
        'title' => 'Website Portfolio',
        'category' => 'web',
        'description' => 'Website portfolio profesional interaktif yang sedang dikembangkan menggunakan Laravel dan Tailwind CSS. Dilengkapi animasi, filter proyek, dan form kontak WhatsApp.',
        'tech' => ['Laravel', 'Tailwind', 'JavaScript'],
        'cover' => 'https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=600&h=400&fit=crop',
        'images' => [
            'https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800&h=500&fit=crop',
        ],
        'apk' => null,
        'demo' => '#',
        'github' => 'https://github.com/darllssss745-sys'
    ],
    [
        'id' => 2,
        'title' => 'Desain Canva',
        'category' => 'uiux',
        'description' => 'Pembuatan desain visual untuk konten media sosial, poster, feed Instagram, dan branding menggunakan Canva Pro.',
        'tech' => ['Canva', 'Graphic Design', 'Branding'],
        'cover' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&h=400&fit=crop',
        'images' => [
            'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1572044162444-ad60f128bdea?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1626785774573-4b7993143460?w=800&h=500&fit=crop',
        ],
        'apk' => null,
        'demo' => '#',
        'github' => '#'
    ],
    [
        'id' => 3,
        'title' => 'Pembuatan Artikel',
        'category' => 'web',
        'description' => 'Menulis dan menyusun artikel informatif, konten website, blog, serta copywriting untuk berbagai kebutuhan digital.',
        'tech' => ['Content Writing', 'SEO', 'Copywriting'],
        'cover' => 'https://images.unsplash.com/photo-1455390582262-044cdead277a?w=600&h=400&fit=crop',
        'images' => [
            'https://images.unsplash.com/photo-1455390582262-044cdead277a?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=800&h=500&fit=crop',
        ],
        'apk' => null,
        'demo' => '#',
        'github' => '#'
    ],
    [
        'id' => 4,
        'title' => 'Editing CapCut',
        'category' => 'uiux',
        'description' => 'Editing video kreatif menggunakan CapCut untuk konten TikTok, Instagram Reels, dan YouTube Shorts dengan efek modern.',
        'tech' => ['CapCut', 'Video Editing', 'Content Creation'],
        'cover' => 'https://images.unsplash.com/photo-1574717024653-61fd2cf4d44d?w=600&h=400&fit=crop',
        'images' => [
            'https://images.unsplash.com/photo-1574717024653-61fd2cf4d44d?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1536240478700-b86987059cd6?w=800&h=500&fit=crop',
            'https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?w=800&h=500&fit=crop',
        ],
        'apk' => null,
        'demo' => '#',
        'github' => '#'
    ],
];

        return view('myportfolio', compact('techStack', 'experiences', 'projects'));
    }
}