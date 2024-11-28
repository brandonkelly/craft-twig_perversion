# Twig Perversion Changelog

## 5.0.1 - 2024.11.28

###

- Merged in Brandon's fix for twig 3.12 breaking `{% return %}`

## 5.0.0 - 2024.04.29

### Changed

- Updated to craftcms/cms `^5.0`

## 2.2.0 - 2020.12.07

### Added

- Added `is array` test

## 2.1.0 - 2019.06.09

### Added

- Added `{% while %}` loop.
- Added `is string` test

### Removed

- Removed `json_decode` filter entirely

### Changed

- Updated to require craftcms/cms `3.1.29` (Where `loop.parent.loop` started to work)

## 2.0.7 - 2019.02.02

### Removed

- Removed json_decode filter for craft version later than 3.1.6

## 2.0.6 - 2018.09.14

### Added

- Added `<=>` operator. ([spaceship operator](http://php.net/manual/en/migration70.new-features.php#migration70.new-features.spaceship-op))

## 2.0.5 - 2018.08.24

### Added

- Added `===`, and `!==` operators.

## 2.0.4 - 2018.07.16

### Added

- Added `string`, `float`, `int`, and `bool` typecast filters.

## 2.0.3 - 2018.02.02

### Removed

- Pull support for `get_class` quick before anyone uses it (use Craft's native `className` instead)

## 2.0.2 - 2018.01.31

### Added

- Added `get_class` filter

## 2.0.1 - 2017.12.13

### Added

- Added `array_splice` filter

### Changed

- Updated to require craftcms/cms `3.0.0-RC1`

## 2.0.0 - 2017.02.02

### Added

- Ported to Craft 3
