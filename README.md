# PHP Simple Server Status aka PSSS

## Why?

Existing gaming server status scripts did not fit my requirements.

## What?

(Somewhat) easy to read PHP file. No database. No login.

## How?

See `config.php.example` for some examples.
Clearly not perfect, this is still a WIP. But hey, it works:tm:

If you need to check servers on other machines, try to connect to RCON, then log out and look for header message.
Example for Discovery Freelancer server, via Telnet.
```bash
echo 'password helloworld' | timeout 0.1 nc 79.137.51.115 1919 | grep 'FLHack'
```

## How much?

It's free software distributed under Apache 2.0 License. See `LICENSE`.

## When?

Updates will be made when I have time to work on this project.

## What then?

Missing features:
- Check for updates (using LinuxGSM),
- Better language support,
- Cleaner UI.
