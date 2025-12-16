<?php



declare(strict_types=1);

class Series
{
    public function __construct(private string $input) {
    }

    private function calculateSeries(int $span): array {
        $series = [];
        for ($offset=0; $offset < strlen($this->input); $offset++) { 
        
            $substring = substr($this->input, $offset, length: $span);
            if (strlen($substring) !== $span) {
                break;
            }
            $series[] = $substring;
        }
        return $series;
    }

    private function calculateProducts(array $result_series): array {
        $products = [];
        foreach($result_series as $series) {
            $product = 1;
            foreach(str_split($series) as $digit) {
                $product *= (int) $digit;
            }
            $products[] = $product;

        }

        return $products;
    }

    public function largestProduct(int $span): int
    {
        if ($this->input === "" and $span === 0) {
            return 1;
        }

        if (!ctype_digit($this->input)) {
            throw new InvalidArgumentException('input must be a number!');
        }
        if ($span > strlen($this->input)){
            throw new InvalidArgumentException('too big length of a substring');
        }
        if ($span < 0){
            throw new InvalidArgumentException('substring has to have some length (must be bigger than 0)');
        }

        $series = $this->calculateSeries($span);

        $products = $this->calculateProducts($series);
 
        return max($products);
    }
}
