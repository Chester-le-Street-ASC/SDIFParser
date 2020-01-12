# SDIFParser
A class based Standard Data Interchange Format parser for swimming data files.

This library aims to implement a parser for SDIF files (*.sd3) so that times can be imported to the [Chester-le-Street ASC Membership System](https://github.com/Chester-le-Street-ASC/Membership), removing the need for users to manually provide times for HyTek galas.

Each individual record type will have a corresponding class allowing easy access to record fields. The parser itself will return these records in an easily navigable structure where hierachy is clear.

<!-- 
## Exceptions
The system will throw exceptions for error conditions. [Please read the
docs](/docs) for full details on these. -->
