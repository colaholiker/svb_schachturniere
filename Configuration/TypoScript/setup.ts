
plugin.tx_svbschachturniere_viewtournament {
  view {
    templateRootPaths.0 = EXT:svb_schachturniere/Resources/Private/Templates/
    templateRootPaths.1 = plugin.tx_svbschachturniere_viewtournament.view.templateRootPath
    partialRootPaths.0 = EXT:svb_schachturniere/Resources/Private/Partials/
    partialRootPaths.1 = plugin.tx_svbschachturniere_viewtournament.view.partialRootPath
    layoutRootPaths.0 = EXT:svb_schachturniere/Resources/Private/Layouts/
    layoutRootPaths.1 = plugin.tx_svbschachturniere_viewtournament.view.layoutRootPath
  }
  persistence {
    storagePid = plugin.tx_svbschachturniere_viewtournament.persistence.storagePid
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_svbschachturniere._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-svb-schachturniere table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-svb-schachturniere table th {
        font-weight:bold;
    }

    .tx-svb-schachturniere table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
