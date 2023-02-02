<?php
class StringMutator
{
    private $word;

    public function __construct($word)
    {
        $this->word = $word;
    }

    public function bold()
    {
        $this->word = sprintf('<b>%s</b>', $this->word);
        return $this;
    }

    public function underline()
    {
        $this->word = sprintf('<u>%s</u>', $this->word);
        return $this;
    }

    public function italic()
    {
        $this->word = sprintf('<i>%s</i>', $this->word);
        return $this;
    }

    public function strike()
    {
        $this->word = sprintf('<strike>%s</strike>', $this->word);
        return $this;
    }

    public function __toString()
    {
        return $this->word;
    }
}


$mutator = new StringMutator('Muhamad Surya Iksanudin');
echo $mutator->bold(). PHP_EOL;
echo $mutator->underline(). PHP_EOL;
echo $mutator->italic(). PHP_EOL;
echo $mutator->strike(). PHP_EOL;

$mutator = new StringMutator('Muhamad Surya Iksanudin');
echo $mutator->bold()->underline()->italic()->strike();

// $this->db->select('*')->from('user')->where('id = 1')->get();

?>
