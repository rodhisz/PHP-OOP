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


echo (new StringMutator('Tebal'))->bold();
echo '<br/>';
echo (new StringMutator('Tebal dan Miring'))->bold()->italic();
echo '<br/>';
echo (new StringMutator('Tebal, Miring, dan Garis Bawah'))->bold()->italic()->underline();
echo '<br/>';
echo (new StringMutator('Dicoret'))->strike();
echo '<br/>';


?>
