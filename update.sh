dpkg-scanpackages debs > Packages.tmp
echo "作业太多了"
rm -f Packages Packages.bz2 Packages.xz Packages.zst
cp Packages.tmp Packages
bzip2 Packages
cp Packages.tmp Packages
xz Packages
cp Packages.tmp Packages
zstd Packages
mv Packages.tmp Packages
php updaterelease.php
