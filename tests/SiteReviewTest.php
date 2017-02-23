<?php

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

/**
 * @covers SiteReview
 */
final class SiteReviewTest extends TestCase
{
    public function testApiUrlIsCorrect()
    {
        $this->assertEquals('http://sitereview.bluecoat.com/rest/categorization', \TixAstronauta\SiteReview\SiteReview::API_URL);
    }

    public function testDefaultGuzzleClient()
    {
        $sr = new \TixAstronauta\SiteReview\SiteReview();

        $this->assertInstanceOf(\GuzzleHttp\Client::class, $sr->client);
    }

    public function testDemoWebsite()
    {
        $url = "https://www.amazon.com/";

        $sr = new \TixAstronauta\SiteReview\SiteReview();

        $resp = $sr->getCategory($url);

        $this->assertEquals('Shopping', $resp);

    }

}