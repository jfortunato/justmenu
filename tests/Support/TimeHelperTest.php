<?php namespace JustMenu\Tests\Support;

use Mockery as m;
use JustMenu\Tests\TestCase;
use JustMenu\Support\TimeHelper;

class TimeHelperTest extends TestCase
{
    public function testConvertSpecialTimesReturnsEmptyWithNoSpecialTimes()
    {
        $this->assertEmpty(TimeHelper::convertSpecialTimes());
    }

    public function testConvertSpecialTimesRendersDaysCorrectly()
    {
        $mockSpecialTime = m::mock('JustMenu\Menu\Entity\SpecialTime');
        $mockSpecialTime->days = '0';

        // single
        $this->assertSame('Only available on days: Sunday at times: any', TimeHelper::convertSpecialTimes($mockSpecialTime));

        // multiple
        $mockSpecialTime->days = '0,3';
        $this->assertSame('Only available on days: Sunday, Wednesday at times: any', TimeHelper::convertSpecialTimes($mockSpecialTime));
    }

    public function testRenderSpecialTimesRendersTimesCorrectly()
    {
        $mockSpecialTime = m::mock('JustMenu\Menu\Entity\SpecialTime');
        $mockSpecialTime->times = '1100-1500';

        // single
        $this->assertSame('Only available on days: any at times: 11:00am - 3:00pm', TimeHelper::convertSpecialTimes($mockSpecialTime));

        // multiple
        $mockSpecialTime->times = '1100-1500,1200-2330';
        $this->assertSame('Only available on days: any at times: 11:00am - 3:00pm, 12:00pm - 11:30pm', TimeHelper::convertSpecialTimes($mockSpecialTime));
    }
}
