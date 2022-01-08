<?php

namespace App\Classes;

class OccurenceBit
{
    public array $sameBitOccurences;
    private int $totalChecks;
    private array $gamma;
    private array $epsilon;

    public function __construct(int $length = 12)
    {
        $this->sameBitOccurences = array_fill(0, $length, 0);
        $this->gamma = array_fill(0, $length, 0);
        $this->epsilon = array_fill(0, $length, 0);
        $this->totalChecks = 0;
    }

    public function countOnes(string $binary) {
        $this->totalChecks++;

        $singleBinary = str_split($binary);

        foreach($singleBinary as $index => $bit) {
            if ($bit === "1") {
                $this->sameBitOccurences[$index]++;
            }
        }
    }

    public function getGamma() {
        foreach($this->sameBitOccurences as $key => $value) {
            $this->gamma[$key] = $value > $this->totalChecks / 2 ? 1 : 0;
        }

        $this->sameBitOccurences;

        return bindec(implode($this->gamma));
    }

    public function getEpsilon() {
        foreach($this->sameBitOccurences as $key => $value) {
            $this->epsilon[$key] = $value < $this->totalChecks / 2 ? 1 : 0;
        }

        return bindec(implode($this->epsilon));
    }

    public function getPower(){
        return $this->getGamma() * $this->getEpsilon();
    }

}
