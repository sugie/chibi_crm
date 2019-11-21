<?php

namespace App\MyServices;


use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class MyApplicationServiceTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function get_birth_day_range()
    {
        $apService = App::make('myapplicationservice');

        try {
            $num = $apService->getBirthdayRange(1, strtotime('1940-1-1'));
            $this->assertTrue(false);
        } catch (\Exception $e) {
            $this->assertSame($e->getCode(), MyApplicationService::ERROR_CODE_WRONG_START_TIMESTAMP);
        }

        // 1970年境界値チェック
        try {
            $num = $apService->getBirthdayRange(1, strtotime('1969-12-31'));
            $this->assertTrue(false);
        } catch (\Exception $e) {
            $this->assertSame($e->getCode(), MyApplicationService::ERROR_CODE_WRONG_START_TIMESTAMP);
        }

        // 1970年境界値チェック
        try {
            $num = $apService->getBirthdayRange(1, strtotime('1970-1-1 8:59:59'));// Timezone JP
            $this->assertTrue(false);
        } catch (\Exception $e) {
            $this->assertSame($e->getCode(), MyApplicationService::ERROR_CODE_WRONG_START_TIMESTAMP);
        }

        // 1970年境界値チェック
        $num = $apService->getBirthdayRange(1, strtotime('1970-1-1 09:00'));
        $this->assertNotEmpty($num);

        // １歳
        $num = $apService->getBirthdayRange(1);
        $this->assertNotEmpty($num);
        $num = $apService->getBirthdayRange(1, time());
        $this->assertNotEmpty($num);


        // 40歳
        $num = $apService->getBirthdayRange(10);
        $this->assertNotEmpty($num);
        $num = $apService->getBirthdayRange(10, strtotime('1980-1-1'));
        $this->assertSame(['start' => '1969-01-02', 'end' => '1970-01-01'], $num);

    }
}
