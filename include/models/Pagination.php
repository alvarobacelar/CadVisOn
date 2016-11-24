<?php

class Pagination {

    /**
     * Total records available in the table
     * @var int
     */
    private $total;

    /**
     * Records to return per set (or page)
     * @var int
     */
    private $perSet;

    /**
     * Number of the current set (1+) (or page)
     * @var int
     */
    private $pg;

    /**
     * Sets available based on total and perSet
     * @var int
     */
    private $sets;
    // private $controller;
    private $self_url;

    /**
     * Constructor
     * @param   int $paged  Número definido de registros a serem mostrados
     * @param   int $perSet Número de registros a serem retornados por conjunto
     * @param   int $total  Total de registros no BD
     */
    public function __construct($current_page, $perSet, $total) {
        // $this->controller = $controller;
        $this->page = $_SERVER["PHP_SELF"];
        $this->self_url = '?pg=';
        $this->perSet = (int) $perSet;
        $this->total = (int) $total;
        $this->sets = (int) ceil($this->total / $perSet);
        $this->pg = $current_page;
        
    }

    /**
     * Paginacao 
     * (função que realiza a paginação)
     * @return String Retorna a paginação estilizada
     */
    public function paginacao($range = 2) {
        $showitems = ($range * 1) - 1;
        $current = $this->pg;
        
        if (!$this->sets) {
            $this->sets = 1;
        }

        $pagination = "<div class='btn-toolbar' role='toolbar'>\n";
        $pagination .= "<div class='btn-group'>";
        if (1 != $this->sets) {

            if ($this->pg > 1) {
                $pagination .= "<a class='btn btn-default' href='" . $this->self_url. -- $current . "'>&laquo;</a>";
            }
            if ($this->pg > 10) {
                $pagination .= "<a class='btn btn-default' href='" . $this->page . "' >1...</a>";
            }

            for ($i = 1; $i <= $this->sets; $i++) {
                if (1 != $this->sets && (!($i >= $this->pg + $range + 1 || $i <= $this->pg - $range - 1) || $this->sets <= $showitems )) {
                    $pagination .= ($this->pg == $i) ? "<button class='btn btn-default active' class='colored'>" . $i . "</button>" : "<a class='btn btn-default' href='" . $this->self_url . $i . "'>" . $i . "</a>";
                }
            }
            if ($this->pg != $this->sets && $this->pg < ($this->sets - 1)) {
                $pagination .= "<a class='btn btn-default' href='" . $this->self_url . $this->sets . "'>..." . $this->sets . "</a>";
            }
            if ($this->pg != $this->sets) {
                $pagination .= "<a class='btn btn-default' href='" . $this->self_url . ($this->pg + 1) . "'>&raquo;</a>";
            }
        }

        $pagination .= "</div>\n";
        $pagination .= "</div> \n";

        return $pagination;
    }

}
