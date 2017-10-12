<?php

/**
 * membuat kelas segiempat
 */
class Rectangle extends Shape
{
    /**
     * fungsi umum yang menetapkan nilai lebar
     */
    public function setWidht(int $width)
    {
        $this->width = $width;
    }
    /**
     * fungsi umum yang menetapkan nilai tingginya
     */
    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function getArea(): int
    {
        // perintah/cara menghitungnya (lebar * tinggi)
        return $this->width * $this->height * $this->large * $this->size;
    }
}
