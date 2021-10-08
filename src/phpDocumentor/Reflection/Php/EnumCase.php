<?php

declare(strict_types=1);

namespace phpDocumentor\Reflection\Php;

use phpDocumentor\Reflection\DocBlock;
use phpDocumentor\Reflection\Element;
use phpDocumentor\Reflection\Fqsen;
use phpDocumentor\Reflection\Location;

final class EnumCase implements Element
{
    /** @var Fqsen */
    private $fqsen;

    /** @var DocBlock|null */
    private $docBlock;
    /** @var Location|null */
    private $location;

    /** @var string|null */
    private $value;

    public function __construct(Fqsen $fqsen, ?DocBlock $docBlock, ?Location $location = null, ?string $value = null)
    {
        $this->fqsen    = $fqsen;
        $this->docBlock = $docBlock;
        $this->location = $location;
        $this->value = $value;
    }

    public function getFqsen(): Fqsen
    {
        return $this->fqsen;
    }

    public function getName(): string
    {
        return $this->fqsen->getName();
    }

    public function getDocBlock(): ?DocBlock
    {
        return $this->docBlock;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }
}