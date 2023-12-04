<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre SellSys

SellSys é um sistema feito com Laravel designado para o gerenciamento de vendas e comissões.

## Requisitos

- Docker
- WSL2 ou SO linux

## Passo a passo para inicialização

- git clone git@github.com:GabrielRagonha/SellSys.git
- cp .env.example .env
- [Comandos da documentação](https://laravel.com/docs/10.x/sail#installing-composer-dependencies-for-existing-projects)
- sudo su
- ./vendor/bin/sail up -d
- chmod -R 777 ./
- ./vendor/bin/sail php artisan key:generate
- ./vendor/bin/sail npm i
- ./vendor/bin/sail php artisan migrate
- ./vendor/bin/sail php artisan db:seed
- ./vendor/bin/sail npm run dev

## Acessar emails

http://localhost:8025/
