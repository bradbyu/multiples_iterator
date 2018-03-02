<?php

namespace Classes;

/**
 * Class MultiplesMatcher
 */
class MultiplesMatcher
{
    const BASE_START                       = 1;
    const BASE_END                         = 100;
    const BASE_FIRST_MULTIPLE              = 3;
    const BASE_SECOND_MULTIPLE             = 5;
    const OUTPUT_FIRST_MULTIPLE            = 'Sweet';
    const OUTPUT_SECOND_MULTIPLE           = 'Water';
    const OUTPUT_FIRST_AND_SECOND_MULTIPLE = 'Sweetwater';

    /**
     * @param int $firstMultiple
     * @param int $secondMultiple
     * @param int $start
     * @param int $end
     *
     * @return string[]
     */
    public function multiplesIterator(
        int $firstMultiple = self::BASE_FIRST_MULTIPLE,
        int $secondMultiple = self::BASE_SECOND_MULTIPLE,
        int $start = self::BASE_START,
        int $end = self::BASE_END
    ): array
    {
        $output = [];
        for ($i = $start; $i <= $end; $i++) {
            if ($i % $firstMultiple == 0 && $i % $secondMultiple == 0) {
                $output[] = self::OUTPUT_FIRST_AND_SECOND_MULTIPLE;
            } else if ($i % $firstMultiple == 0) {
                $output[] = self::OUTPUT_FIRST_MULTIPLE;
            } else if ($i % $secondMultiple == 0) {
                $output[] = self::OUTPUT_SECOND_MULTIPLE;
            } else {
                $output[] = $i;
            }
        }

        return $output;
    }

    /**
     * @param string[] $output
     *
     * @return void
     */
    public function arrayValuesRenderer(array $output)
    {
        foreach ($output as $item) {
            if (is_array($item)) {
                $this->arrayValuesRenderer($item);
                continue;
            }
            echo $item . "\n";
        }
    }
}
