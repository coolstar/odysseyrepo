dpkg-scanpackages --multiversion debs > Packages.tmp
rm -f Packages Packages.bz2 Packages.xz Packages.zst
cp Packages.tmp Packages
bzip2 Packages
cp Packages.tmp Packages
xz Packages
cp Packages.tmp Packages
zstd Packages
mv Packages.tmp Packages
php updaterelease.php
gpg -abs -u 2703D09477F7EFC9B96821905710F00A25078B2D -o Release.gpg Release
