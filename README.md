# Telnet IRC Server

A simple IRC server which uses telnet as client. 

## Requirements

* PHP7.1 or more
* The pcntl extension
* composer

## Installation

```bash
composer create-project --prefer-dist osflab/osf-irc osf-irc
```

## Usage

**To start the server:**

```bash
php ./osf-irc/bin/irc-run.php
```

**For each client:**

* In a new terminal, type `telnet <hostname> 9999` (replace `<hostname>` by yours) 
* Enter your name + `[enter]`: a number is displayed
* Open a *new terminal* and type `telnet <hostname> 9999` again
* Enter the number

You can use the first terminal for reading and the second one to write. Repeat 
this for each client.

## Additional information

Originally, this component is a demonstration of developing a deamon with PHP, 
using the pcntl extension. It addresses process management concepts, semaphores 
and network sockets.
