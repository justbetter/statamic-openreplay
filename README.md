# Statamic OpenReplay

Integration for https://openreplay.com

## Installation

```
composer require justbetter/statamic-openreplay
```

## Configuration

Make sure to have a `@stack('head')` in your projects layout template before the `</head>` closing tag.

Add your OpenReplay credentials in the `.env`:

```
JUSTBETTER_OPENREPLAY_URL=https://domain.com/ingest
JUSTBETTER_OPENREPLAY_TOKEN=
```

Optionally you can tweak the following settings:
```
JUSTBETTER_OPENREPLAY_ENABLED=true
JUSTBETTER_OPENREPLAY_CAPTURE_NETWORK=true
JUSTBETTER_OPENREPLAY_DEFAULT_INPUT_MODE=0
JUSTBETTER_OPENREPLAY_OBSCURE_TEXT_NUMBERS=true
JUSTBETTER_OPENREPLAY_OBSCURE_TEXT_EMAILS=true
```

## License

GNU General Public License v3. Please see [License File](LICENSE) for more information.
