<?php

// namespace Mutator;

// use Post;

// class PostMutator
// {
//     private $post;
//     public function __construct(Post $post)
//     {
//         $this->post = $post;
//     }
//     public function getBoldTitle()
//     {
//         return StringMutator::bold($this->post->getTitle());
//     }
//     public function getItalicContent()
//     {
//         return StringMutator::italic($this->post->getContent());
//     }
// }


// namespace Mutator;

// use PostInterface;

// class PostMutator
// {
//     private $post;
//     public function __construct(PostInterface $post)
//     {
//         $this->post = $post;
//     }
//     public function getBoldTitle()
//     {
//         return StringMutator::bold($this->post->getTitle());
//     }
//     public function getItalicContent()
//     {
//         return StringMutator::italic($this->post->getContent());
//     }
// }

//dengan return
// namespace Mutator;

// use PostInterface;

// class PostMutator
// {
//     private $post;
//     public function __construct(PostInterface $post)
//     {
//         $this->post = $post;
//     }
//     public function getBoldTitle(): string
//     {
//         return StringMutator::bold($this->post->getTitle());
//     }
//     public function getItalicContent(): string
//     {
//         return StringMutator::italic($this->post->getContent());
//     }
//     public function getOriginalPost(): PostInterface
//     {
//         return $this->post;
//     }
// }

//nullabel
// namespace Mutator;

// use PostInterface;

// class PostMutator
// {
//     private $post;
//     public function __construct(?PostInterface $post)
//     {
//         $this->post = $post;
//     }
//     public function getOriginalPost(): ?PostInterface
//     {
//         return $this->post;
//     }
// }

//void
namespace Mutator;

use PostInterface;

class PostMutator
{
    private $post;
    public function __construct(?PostInterface $post)
    {
        $this->post = $post;
    }
    public function getOriginalPost(): ?PostInterface
    {
        return $this->post;
    }
    public function noReturnValue(): void
    {
    }
}
