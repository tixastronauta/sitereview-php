tixastronauta/sitereview-php
============================

[![Build Status](https://travis-ci.org/tixastronauta/sitereview-php.svg?branch=master)](https://travis-ci.org/tixastronauta/sitereview-php)

PHP Wrapper for Blue Coat's Site Review website: [http://sitereview.bluecoat.com/sitereview.jsp](http://sitereview.bluecoat.com/sitereview.jsp)

# Install

Via composer

```bash
$ composer require tixastronauta/sitereview-php
```

# Usage

```php
<?php

require 'vendor/autoload.php';

$targetUrl = "https://www.amazon.com";
$siteReview = new \TixAstronauta\SiteReview\SiteReview();
$response = $sr->getCategory($targetUrl); // 'Shopping'
```

# Categories

Bellow you'll find a List of all available categories. Please note that categories can be combined.

- Abortion
- Adult/Mature Content
- Alcohol
- Alternative Spirituality/Belief
- Art/Culture
- Auctions
- Audio/Video Clips
- Brokerage/Trading
- Business/Economy
- Charitable Organizations
- Chat (IM)/SMS
- Child Pornography
- Computer/Information Security
- Content Servers
- Controlled Substances
- Dynamic DNS Host
- E-Card/Invitations
- Education
- Email
- Entertainment
- Extreme
- File Storage/Sharing
- Financial Services
- For Kids
- Gambling
- Games
- Government/Legal
- Hacking
- Health
- Humor/Jokes
- Informational
- Internet Connected Devices
- Internet Telephony
- Intimate Apparel/Swimsuit
- Job Search/Careers
- Malicious Outbound Data/Botnets
- Malicious Sources/Malnets
- Marijuana
- Media Sharing
- Military
- Mixed Content/Potentially Adult
- News/Media
- Newsgroups/Forums
- Non-Viewable/Infrastructure
- Nudity
- Office/Business Applications
- Online Meetings
- Peer-to-Peer (P2P)
- Personals/Dating
- Personal Sites
- Phishing
- Piracy/Copyright Concerns
- Placeholders
- Political/Social Advocacy
- Pornography
- Potentially Unwanted Software
- Proxy Avoidance
- Radio/Audio Streams
- Real Estate
- Reference
- Religion
- Remote Access Tools
- Restaurants/Dining/Food
- Scam/Questionable/Illegal
- Search Engines/Portals
- Sex Education
- Sexual Expression
- Shopping
- Social Networking
- Society/Daily Living
- Software Downloads
- Spam
- Sports/Recreation
- Suspicious
- Technology/Internet
- Tobacco
- Translation
- Travel
- TV/Video Streams
- Uncategorized
- Vehicles
- Violence/Hate/Racism
- Weapons
- Web Ads/Analytics
- Web Hosting

# License

```
MIT License

Copyright (c) 2017 Tiago 'Tix' Carvalho

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

```