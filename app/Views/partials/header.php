<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A basic point-of-sale application built with CodeIgniter 4.">
    <title><?= esc($title) ?> | SwiftPOS</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
</head>
<body>
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="<?= site_url('/') ?>" aria-label="SwiftPOS home">
                <span class="brand-mark">S</span>
                <span>SwiftPOS</span>
            </a>

            <nav aria-label="Main navigation">
                <a href="<?= site_url('/') ?>">Home</a>
                <a href="<?= site_url('about') ?>">About</a>
                <a href="<?= site_url('customers') ?>">Customers</a>
                <a href="<?= site_url('users') ?>">Users</a>
            </nav>
        </div>
    </header>

    <main>

