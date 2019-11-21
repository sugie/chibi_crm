<?php


namespace App\MyServices;


class MyApplicationService
{
    const ERROR_CODE_WRONG_START_TIMESTAMP = 1992;

    public function getAgeFromBirthDate($date): int
    {
        return 9999;
    }

    /**
     * 年齢を指定して 誕生日の始まりの日と終わりの日を返す
     * @param int $age 年齢を指定
     * @param int $targetTimestamp 対象タイムスタンプ。指定するとこの時刻を基準にして年齢を計算する。デフォルトはNULL
     * @return array 0に開始日、1に終了日が入る
     */
    function getBirthdayRange(int $age, int $targetTimestamp = null)
    {
        if ($targetTimestamp < 0) {
            throw new \Exception('基準日は1970年以降', self::ERROR_CODE_WRONG_START_TIMESTAMP);
        }
        $ts = $targetTimestamp;
        if (is_null(($targetTimestamp))) {
            $targetTimestamp = time();
        }
        $_ts_b = $targetTimestamp + 86400;

        $start = mktime(0, 0, 0, date('m', $_ts_b), date('d', $_ts_b), date('Y', $_ts_b) - $age - 1);
        $end = mktime(0, 0, 0, date('m', $targetTimestamp), date('d', $targetTimestamp), date('Y', $targetTimestamp) - $age);
        return ['start' => date('Y-m-d', $start), 'end' => date('Y-m-d', $end)];
    }

}
