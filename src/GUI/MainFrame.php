<?php


namespace Jehaby\Optis\GUI;


class MainFrame
{

    function __construct( $parent=null )
    {
        parent::__construct ( $parent, wxID_ANY, wxEmptyString, wxDefaultPosition, new wxSize( 1026,668 ), wxDEFAULT_FRAME_STYLE|wxTAB_TRAVERSAL );

        $this->SetSizeHints( wxDefaultSize, wxDefaultSize );

        $this->mainMenu = new wxMenuBar( 0 );
        $this->productMenu = new wxMenu();
        $this->menuListProducts = new wxMenuItem( $this->productMenu, wxID_ANY, "Список", wxEmptyString, wxITEM_NORMAL );
        $this->productMenu->Append( $this->menuListProducts );

        $this->menuAddProduct = new wxMenuItem( $this->productMenu, wxID_ANY, "Добавить", wxEmptyString, wxITEM_NORMAL );
        $this->productMenu->Append( $this->menuAddProduct );

        $this->mainMenu->Append( $this->productMenu, "Товары" );

        $this->clientMenu = new wxMenu();
        $this->menuListClients = new wxMenuItem( $this->clientMenu, wxID_ANY, "Список", wxEmptyString, wxITEM_NORMAL );
        $this->clientMenu->Append( $this->menuListClients );

        $this->menuAddClient = new wxMenuItem( $this->clientMenu, wxID_ANY, "Добавить", wxEmptyString, wxITEM_NORMAL );
        $this->clientMenu->Append( $this->menuAddClient );

        $this->mainMenu->Append( $this->clientMenu, "Клиенты" );

        $this->docMenu = new wxMenu();
        $this->mainMenu->Append( $this->docMenu, "Документы" );

        $this->areferenceMenu = new wxMenu();
        $this->menuHelp = new wxMenuItem( $this->areferenceMenu, wxID_ANY, "Помощь", wxEmptyString, wxITEM_NORMAL );
        $this->areferenceMenu->Append( $this->menuHelp );

        $this->menuAboutProgram = new wxMenuItem( $this->areferenceMenu, wxID_ANY, "О программе", wxEmptyString, wxITEM_NORMAL );
        $this->areferenceMenu->Append( $this->menuAboutProgram );

        $this->mainMenu->Append( $this->areferenceMenu, "Справка" );

        $this->SetMenuBar( $this->mainMenu );


        $this->Centre( wxBOTH );

        // Connect Events
        $this->Connect( $this->menuListProducts->GetId(), wxEVT_COMMAND_MENU_SELECTED, array($this, "listProducts") );
    }


    function __destruct( ){
    }


    // Virtual event handlers, overide them in your derived class
    function listProducts( $event ){
        $event->Skip();
    }

}

?>
