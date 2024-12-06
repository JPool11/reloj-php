# Clock Angle Calculator

## Description
A PHP script that calculates and visualizes the angle between hour and minute hands of an analog clock.

## Requirements
- PHP 7.0 or higher
- Web server with PHP support (e.g., Apache, Nginx)

## Features
- Calculates the smallest angle between hour and minute hands
- Generates an SVG visualization of the clock
- Displays the calculated angle

## Usage
1. Save the script with a `.php` extension (e.g., `clock_angle.php`)
2. Set the `$hour` and `$minute` variables to desired time
3. Run the script in a PHP-enabled web server

### Example
```php
$hour = 3;    // Hour (0-11)
$minute = 15; // Minute (0-59)
drawClock($hour, $minute);
```

## Functions
- `calculateAngle($hour, $minute)`: Computes the smallest angle between clock hands
- `drawClock($hour, $minute)`: Renders an SVG clock visualization

## Output
The script generates an SVG with:
- Clock face
- Hour hand (blue)
- Minute hand (red)
- Calculated angle display