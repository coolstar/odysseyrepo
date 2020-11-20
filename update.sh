dpkg-scanpackages debs > Packages.tmp
rm -f Packages Packages.bz2 Packages.xz
cp Packages.tmp Packages
bzip2 Packages
cp Packages.tmp Packages
xz Packages
mv Packages.tmp Packages
php updaterelease.php
