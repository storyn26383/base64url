# Base64URL

An URL safe base64 encode/decode with JSON support.

[![Build Status](https://github.com/storyn26383/base64url/actions/workflows/tests.yml/badge.svg?branch=master)](https://github.com/storyn26383/base64url/actions/workflows/tests.yml)
[![Coverage Status](https://coveralls.io/repos/github/storyn26383/base64url/badge.svg?branch=master)](https://coveralls.io/github/storyn26383/base64url?branch=master)

## Quick Start

### Installation

```bash
composer require sasaya/base64url
```

## Usage

```php
use Sasaya\Base64URL;

Base64URL::encode('Hello World');              // string(15) "SGVsbG8gV29ybGQ"
Base64URL::encode(['Hello', 'World']);         // string(23) "WyJIZWxsbyIsIldvcmxkIl0"
Base64URL::encode([]);                         // string(0) ""

Base64URL::decode('SGVsbG8gV29ybGQ');          // string(11) "Hello World"
Base64URL::decode('WyJIZWxsbyIsIldvcmxkIl0');  // array(2) { [0]=> string(5) "Hello" [1]=> string(5) "World" }
Base64URL::decode('');                         // array(0) { }
```
