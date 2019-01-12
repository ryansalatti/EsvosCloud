// We only can count up. The 4. digit is only for the internal patchlevel to trigger DB upgrades
// between betas, final and RCs. This is _not_ the public version number. Reset minor/patchlevel
// when updating major/minor version number.
$OC_Version = [1, 0, 0, 0];
// human readable string
$OC_VersionString = '1.0.0';
$OC_VersionCanBeUpgradedFrom = [[0, 0, 0],[0, 0]];
// build number
$OC_Build = '';
// Vendor of package
$vendor = 'esvos';