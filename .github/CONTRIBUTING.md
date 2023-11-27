# Contributing to ViaCnt

Before submitting your contribution, take a moment to read the following guidelines.

- [1. Getting Started](#1-getting-started)
- [2. Issue Reporting Guidelines](#2-issue-reporting-guidelines)
- [3. Pull Request Guidelines](#3-pull-request-guidelines)
- [4. New Features and Security Vulnerabilities](#4-new-features-and-security-vulnerabilities)
- [5. Development Setup](#5-development-setup)
    - [5.1. Minimum Requirements](#51-minimum-requirements)
    - [5.2. Set Up the Environment](#52-set-up-the-environment)
    - [5.3. Create the Environment](#53-create-the-environment)
    - [5.4. Building Assets](#54-building-assets)
- [6. Open Application in Browser](#6-open-application-in-browser)
- [7. Testing](#7-testing)

## 1. Getting Started

Before you start:
- Ensure your environment meets the established minimum requirements.
- Check the [existing issues](https://github.com/Elivandro/cnt-api/issues) and see if we accept contributions for your type of problem.

<br />

## 2. Issue Reporting Guidelines

- The list of issues in this repository is exclusively for bug reports, documentation reports, and feature requests. Non-conforming issues will be closed immediately.

    - For answers to your questions, you can get responses on our [Whatsapp](https://wa.me/556799082296) or [Whatsapp](https://wa.me/556999076818).

- Try searching for your issue; it might have already been addressed or fixed on the master branch.

- Use only the minimum amount of code necessary to reproduce the unexpected behavior. The more precisely you isolate the problem, the faster we can investigate.

- Check if the issue can be reproduced with the latest stable version of `Via Cnt` and indicate the specific version you are using.

- Issues without clear reproduction steps will not be triaged. If an issue labeled as "needs reproduction" doesn't receive further information from the issue author for more than 7 days, it will be closed.

- If your issue has been resolved but is still open, feel free to close it. If you have found a solution on your own, it might be helpful to explain how you fixed it.

- Most importantly, we ask for your patience: the team must balance your request with many other responsibilities—fixing other bugs, answering other questions, new features, new documentation, etc.

<br />

## 3. Pull Request Guidelines

- If adding a new feature:
    - Provide a compelling reason for adding this feature. Ideally, you should open a suggestion issue first and get approval before working on it.
    - Include tests for all added or modified code.
    - Ensure all tests are passing.

- If fixing a bug:
    - If you're addressing a specific issue, add `(fix: #xxxx[,#xxx])` (#xxxx is the issue ID) in your PR title for better release logging, for example, `fix: update entity encoding/decoding (fix #3899)`.
    - Provide a detailed description of the bug in the PR.

<br />

## 4. New Features and Security Vulnerabilities

If you intend to propose a new feature, submit an issue to this repository.

In the case of discovering a security vulnerability in `Via Cnt`, **DO NOT** publicly disclose it as an issue; instead, send a message to the email address [tiago.neitzke@yahoo.com](mailto:tiago.neitzke@yahoo.com) or [elivandro@hotmail.com.br](mailto:elivandro@hotmail.com.br). All security vulnerabilities will be addressed as quickly as possible.

<br />

## 5. Development Setup

`Via Cnt` is developed using Laravel 10.x version. The entire development environment can be easily created using `Laravel Sail`. This creates a standard environment where all developers will have the same versions of certain technologies on their workstations, avoiding potential problems due to version incompatibility.

`Laravel Sail` as defined in its [documentation](https://laravel.com/docs/10.x/sail) has the following definition:

> Laravel Sail is a lightweight command-line interface for interacting with Laravel's default Docker development environment. Sail provides an excellent starting point for building a Laravel application using PHP, MySQL, and Redis without requiring prior Docker experience.

Consequently, to maintain compatibility between development environments, we will define here the minimum requirements for generating and hosting the project.

<br />

### 5.1. Minimum Requirements
- PHP v8.1+;
- Composer v2.2.o;
- NodeJs v20.5.1;
- Npm v9.8.0;
- Docker v24.0.5;

<br />

### 5.2. Set Up the Environment
First, clone the repository by executing the following command:

```bash
$ git clone https://github.com/TiagoLemosNeitzke/gerencie_mei.git

```
### 5.2. Set up the environment
First, clone the repository by executing the following command:

```bash
$ git clone https://github.com/TiagoLemosNeitzke/gerencie_mei.git
```

After cloning the repository, access the project folder and execute the following command:

```bash
$ ./sail config
```

📝 Note
> This command will create the `.env` file and configure the environment variables for the project.


📝 Observation
> If you are running the project for the first time, it's necessary to execute the above command so that composer and npm dependencies are installed correctly. Additionally, this command will create an .env file for you (if it doesn't already exist) based on the .env.example file.

```bash
cp .env.example .env

docker run --rm     
-u "$(id -u):$(id -g)"     
-v "$(pwd):/var/www/html"     
-w /var/www/html     
laravelsail/php82-composer:latest     
composer install --ignore-platform-reqs

npm install
```

### 5.3. Create the Environment
Once all `composer` and `npm` dependencies have been installed, we can create the environment by executing the following command:

```bash
$ ./sail init
```

📝 Note
> This command will download all Docker images and create all containers necessary for the project to work.

📝 Observation:
>If the Docker images already exist on your workstation, their download will be skipped. If the Dockerfile of the application image is altered, this command will rebuild the image before running the container.

After downloading all Docker images, all containers will be started, thus concluding the creation cycle of the development environment.

<br />

### 5.4. Building Assets
To build the assets, execute the following command:

```bash
$ ./sail npm run dev
```

<br />

## 6. Open Application in Browser
With everything set up, it's finally time to see the application in action. To do this, access the URL http://localhost:${APP_PORT} in your favorite browser.

📝 Observation:
>Where ${APP_PORT} should be replaced by the port number specified in your '.env' file. If you haven't specified a port number, the default port used will be 80.

<br />
