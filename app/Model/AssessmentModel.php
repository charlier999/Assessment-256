<?php
namespace App\Model;

class AssessmentModel
{
    /**
     * Value number 1
     * @var string
     */
    private string $val1;
    /**
     * Value number 2
     * @var string
     */
    private string $val2;
    /**
     * Value number 3
     * @var string
     */
    private string $val3;
    /**
     * Value number 4
     * @var string
     */
    private string $val4;

    /**
     * Constructs the model
     * @param string $val1
     * @param string $val2
     * @param string $val3
     * @param string $val4
     */
    public function __construct(string $val1, string $val2, string $val3, string $val4)
    {
        $this->val1 = $val1;
        $this->val2 = $val2;
        $this->val3 = $val3;
        $this->val4 = $val4;
    }
    
    /**
     * @return string
     */
    public function getVal1()
    {
        return $this->val1;
    }
    
    /**
     * @return string
     */
    public function getVal2()
    {
        return $this->val2;
    }
    
    /**
     * @return string
     */
    public function getVal3()
    {
        return $this->val3;
    }
    
    /**
     * @return string
     */
    public function getVal4()
    {
        return $this->val4;
    }
}

