
plugin.tx_svbschachturniere_viewtournament {
  view {
    # cat=plugin.tx_svbschachturniere_viewtournament/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:svb_schachturniere/Resources/Private/Templates/
    # cat=plugin.tx_svbschachturniere_viewtournament/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:svb_schachturniere/Resources/Private/Partials/
    # cat=plugin.tx_svbschachturniere_viewtournament/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:svb_schachturniere/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_svbschachturniere_viewtournament//a; type=string; label=Default storage PID
    storagePid =
  }
}
